<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;
use App\Helpers\Template;

class Inquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS', 'contact@clove-Research.com'), '[Clove] - Contact Us')
                ->subject("New message from: ".excerptLimit($this->contact->name , 15))
                ->view('mail.inquiry')
                ->with([
                    'name' => $this->contact->name,
                    'email' => $this->contact->email,
                    'message_str' => $this->contact->message,
                    'attach' => $this->contact->getAttachedFile()
                ]);
    }
}
