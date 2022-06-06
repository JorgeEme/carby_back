<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPassword extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.forget')
        ->from(config('mail.from.address'), config('mail.from.name'))
        ->subject('Did you forget your password? Don\'t worry anymore!')
        ->with([
            'user' => $this->user,
            'url' => url('password?token=' . $this->token . '&email=' . $this->user->email)
        ]);
    }
}
