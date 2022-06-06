<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\Vehicle;
use Illuminate\Http\Request;

use function App\Helpers\ko;
use function App\Helpers\ok;

class BookController extends Controller
{
    public function bookVehicle(Request $request, $vehicle_id)
    {
        $user = auth()->user();

        if (!$user->validated)
            return ko(__('custom_messages.user_validated'));

        $vehicle = Vehicle::find($vehicle_id);

        if (!$vehicle)
            return ko(__('custom_messages.vehicle_not_found'));

        if ($user->books()->count() > 0)
            return ko(__('custom_messages.active_book'));

        if ($user->journeys()->where('ends_at', null)->count() > 0)
            return ko(__('custom_messages.active_journey_book'));

        $booked = Book::where('vehicle_id', $vehicle->id)->exists();

        if ($booked)
            return ko(__('custom_messages.vehicle_booked'));

        $user->books()->create([
            "vehicle_id" => $vehicle->id,
            "ends_at"    => now()->addMinutes(Book::BOOK_MINUTES),
        ]);

        $vehicle->update(['available' => false]);

        return ok(BookResource::make($user->books()->first()));
    }

    public function cancel(int $id)
    {
        $user = auth()->user();

        $booking = $user->books()->where('id', $id)->first();

        if (!$booking) return ko(__('custom_messages.booking_not_found'));

        $booking->vehicle()->update(['available' => true]);

        return ok($booking->delete());
    }
}
