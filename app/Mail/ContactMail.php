<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public $email;
    public $name;
    public $sender;
    public $content;
    public $subject;

    public function __construct($sender, $subject, $name, $content)
    {
        $this->sender = $sender;
        // $this->email = $email;
        $this->name = $name;
        $this->content = $content;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->from($this->sender, $this->name, $this->content)
        ->view('emails.contact')->with([
            'content' => $this->content
        ]);
    }
}
