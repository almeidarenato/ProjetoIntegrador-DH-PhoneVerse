<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = $this->data['email'];
        $subject =  $this->data['subject'];
        $name =  $this->data['name'];
        return $this->view('emails.contact')
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with(['text' => $this->data['text'], 'contato' => $this->data['name']]);
    }
}
