<?php

namespace App\Http\Controllers;

use App\General;
use App\Http\Requests\PaymentJourneyRequest;
use App\Http\Requests\StoreJourneyRequest;
use App\Http\Requests\UpdateJourneyRequest;
use App\Http\Resources\JourneyResource;
use App\Mail\InvoiceMail;
use App\Models\Journey;
use App\Models\PostalCode;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use function App\Helpers\ko;
use function App\Helpers\ok;

class JourneyController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return ok(JourneyResource::collection($user->journeys));
    }

    public function createJourney(Request $request, $vehicleId)
    {
        $user = auth()->user();

        if (!$user->validated)
            return ko(__('custom_messages.user_validated'));

        $book = $user->books()->first();

        $vehicle = Vehicle::where('available', true)->orWhereIn('id', [$book ? $book->vehicle_id : null])->where('id', $vehicleId)->first();

        if (!$vehicle)
            return ko(__('custom_messages.vehicle_not_found'));


        if ($user->journeys()->whereNull('ends_at')->count() > 0)
            return ko(__('custom_messages.active_journey'));

        $vehicle->update(['available' => false]);

        $user->journeys()->create([
            "vehicle_id" => $vehicle->id,
            "starts_at" => now(),
        ]);

        if ($user->device_token && $user->notifications) {
            General::sendPush($user, __('custom_messages.start_journey_title_push'), __('custom_messages.start_journey_body_push'));
        }

        $user->books()->delete();

        return ok(true);
    }

    public function setupPay(PaymentJourneyRequest $request, int $id)
    {
        // get postal code from lat & lng
        $postalCode = General::getPostalCode($request->lat, $request->lng);

        // Find postal code into allowed postal codes
        $isInsideLimit = PostalCode::where('postal_code', $postalCode)->exists();

        //if not found, return err.
        if (!$isInsideLimit) return ko(__('custom_messages.outside_limits'));

        // TODO: PREGUNTAR AL ELOI SI EM POT PASSAR EL USERID
        // $user = auth()->user();
        // $journey = $user->journeys()->where('id', $id)->first();
        $journey = Journey::find($id);

        if (!$journey) return ko(__('custom_messages.journey_not_found'));

        if ($journey->invoice_path) return ko(__('custom_messages.journey_paid'));

        $user = $journey->user;
        $vehicle = $journey->vehicle;

        // try {
        //     $intent = $user->createSetupIntent();
        // } catch (\Exception $e) {
        //     return view('error');
        // }

        if ($journey->total_price) {
            $price = $journey->total_price;
        } else {
            $price = $journey->applyDiscount();
            $journey->update(['total_price' => $price]);
        }

        try {
            \Stripe\Stripe::setApiKey(config('cashier.secret'));

            \Stripe\ApplePayDomain::create([
                'domain_name' => config('app.url')
            ]);

            $intent = \Stripe\PaymentIntent::create([
                'amount' => (int) ($journey->total_price * 100),
                'currency' => 'eur',
            ]);

            $intent = $intent->client_secret;
        } catch (\Exception $e) {
            info($e->getMessage());
            return view('error');
        }


        $journey->vehicle->update([
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);

        return view('pay2', compact('intent', 'journey', 'vehicle', 'user', 'price'));
    }

    public static function pay(Request $request, int $id)
    {
        $journey = Journey::find($id);

        if (!$journey) return view('error');

        $user = $journey->user;
        $paymentMethod = $request->payment_method;

        // try {
        //     $user->createOrGetStripeCustomer();
        //     $user->updateDefaultPaymentMethod($paymentMethod);

        //     $amount = (int) (100 * (float) number_format($request->price, 2, '.', ''));
        //     $payment = $user->charge($amount, $paymentMethod);
        // } catch (\Exception $e) {
        //     return view('error');
        // }

        $journey->update(['ends_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        $vehicle = $journey->vehicle;
        $vehicle->update(['available' => true]);
        $journey->createInvoice();

        $vehicle = $vehicle->vehicle_type;

        if ($user->device_token && $user->notifications) {
            General::sendPush($user, __('custom_messages.finish_journey_title_push'), __('custom_messages.finish_journey_body_push'));
        }

        Mail::to($user->email)->send(new InvoiceMail($journey));

        return view('pay-success', compact('vehicle', 'journey'));
    }
}
