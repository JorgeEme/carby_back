<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ManageIssueMail extends Mailable
{
    use Queueable, SerializesModels;

    private $id;
    private $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(int $id, string $message)
    {
        $this->id = $id;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.issue')
        ->from(config('mail.from.address'), config('mail.from.name'))
        ->subject("Your issue (#$this->id) has been answered")
        ->with([
            'id' => $this->id,
            'message' => $this->message
        ]);
    }
}
