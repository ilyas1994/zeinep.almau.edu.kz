<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMSG extends Mailable
{
    use Queueable, SerializesModels;
    protected $email;
    protected $number;
    protected $obwaga;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $number, $obwaga)
    {
        $this->email = $email;
        $this->number = $number;
        $this->obwaga = $obwaga;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->email == 'zeinepcollege@almau.edu.kz') {
            return $this->view('SendMSG.sendMessage', ['email' => $this->email, 'number' => $this->number, 'obwaga' => $this->obwaga])->subject('Новая заявка от zeinep.almau.edu.kz');
        } else {
            return $this->view('SendMSG.sendMessageForClient')->subject('Автоответчик zeinep.almau.edu.kz');
        }

    }
}
