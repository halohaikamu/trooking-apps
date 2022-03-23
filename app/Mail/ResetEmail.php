<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $token;

    public function __construct($name, $token)
    {
        $this->name = $name;
        $this->token = $token;
    }

    public function build()
    {
        $user['name'] = $this->name;
        $user['token'] = $this->token;

        return $this->from("felixuyee@gmail.com", "Trooking App")
        ->subject('Email Reset Link')
        ->view('user.dashboard.reset-email', ['user' => $user]);
    }
}
