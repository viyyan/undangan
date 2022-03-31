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
        return $this->from(env('MAIL_FROM_ADDRESS', 'kontak@nipefever.co.id'), '['.env('APP_NAME').'] - Contact Us')
                ->subject("New message from: ".excerptLimit($this->contact->name , 15))
                ->view('mail.inquiry')
                ->with([
                    'name' => $this->contact->name ." ".$this->contact->last_name ,
                    'email' => $this->contact->email,
                    'phone' => $this->contact->phone,
                    'message_str' => $this->contact->message,
                    'subject_str' => $this->contact->subject,
                ]);
    }
}
