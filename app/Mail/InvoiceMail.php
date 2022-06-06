<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;


    private $journey;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $journey)
    {
        $this->journey = $journey;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.invoice')
        ->from(config('mail.from.address'), config('mail.from.name'))
        ->subject("Carby invoice - ". now())
        ->attach(storage_path() . '/app/public' . $this->journey->invoice_path )
        ->with([
            'journey' => $this->journey,
        ]);
    }
}
