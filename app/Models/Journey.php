<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;

class Journey extends Model
{
    const PAGINATION = 20;
    const BASE_PRICE = 0.5;

    //PAGINATION
    protected $perPage = self::PAGINATION;

    protected $table = 'journeys';

    protected $fillable = [
        'user_id', 'vehicle_id', 'discount_id', 'starts_at', 'ends_at', 'journey_price', 'total_price', 'invoice_path'
    ];

    protected $with = ['vehicle'];

    protected $hidden = [];

    protected $casts = [];

    protected $appends = ['invoice_url'];

    const INVOICES_FOLDER = "/invoices";

    // RELATIONSHIPS 🔀

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function discount(): BelongsTo
    {
        return $this->belongsTo(Discount::class, 'discount_id', 'id');
    }

    // SCOPES 🔎


    // APPENDS 🔧
    public function getInvoiceUrlAttribute()
    {
        return URL::asset('storage/' . $this->invoice_path);
    }

    // MUTATORS 🐍


    // FUNCTIONS 📲

    public function createInvoice()
    {
        $data['date'] = now()->format('Y-m-d');
        $data['order'] = $this;
        $data['service'] = self::BASE_PRICE;
        $data['company'] =  config('app.company');
        $data['nif'] = config('app.nif');
        $data['address'] = config('app.address');
        $data['postal_code'] = config('app.postal_code');
        $data['email'] = config('app.email');


        $filename = self::INVOICES_FOLDER . '/' . md5(now()->format('Y-m-d H:i:s:u')) . rand(1000, 99000) . '.pdf';
        $pdf = FacadePdf::loadView('invoices.base', $data)->setPaper('a4', 'landscape')->save(storage_path('app/public' . $filename));

        $this->update([
            'invoice_path' => $filename
        ]);
    }

    public function applyDiscount()
    {
        $this->update([
            'journey_price' => Carbon::parse($this->starts_at)->diffInMinutes(now()) * $this->vehicle->vehicle_type->price_by_minute + self::BASE_PRICE,
        ]);

        //if not exists discount return the price without discount
        if (!$this->discount_id) {
            return $this->journey_price + self::BASE_PRICE;
        }

        //if exists discount of type amount
        if ($this->discount->amount) {
            // substract amount to price
            $sum = $this->journey_price - $this->discount->amount;

            //If $sum is negative, return 0.
            if ($sum < 0)
                return 0 + self::BASE_PRICE;

            //else return substract result
            return $sum + self::BASE_PRICE;
        }

        //if exists discount of type percentage
        if ($this->discount->percentage) {
            //calculate price to subsctract
            $toSubstract = ($this->journey_price / 100) * $this->discount->percentage;

            $substract = $this->journey_price - $toSubstract;

            //If $sum is negative, return 0.
            if ($substract < 0)
                return 0 + self::BASE_PRICE;

            //else return substract result
            return $substract + self::BASE_PRICE;
        }
    }




    // RULES 📐

    public static $createRules = [
        'lat' => ['required','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
        'lng' => ['required','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/']
    ];

    public static $updateRules = [
        // 'email'     => ['required', 'string', 'email'],
    ];
}
