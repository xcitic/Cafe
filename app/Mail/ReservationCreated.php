<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReservationCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    public $password;
    public $email;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reservation, $email, $password = null)
    {
        $this->reservation = $reservation;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.reservation');
    }
}
