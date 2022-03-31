<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\Inquiry;

class ContactController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = array(
            "title" => "Contact Us",
            "cssFileName" => "contact",
            "jsFileName" => "contact",
            "classBody" => "p-contact",
            "isContact" => true
        );
        return view('frontend.pages.contact-us.main', $data);
    }

    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required|max:255',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
			'message' => $request->message,
			'last_name' => $request->last_name,
			'phone' => $request->phone,
			'subject' => $request->subject,
		]);

        $emails = explode(',', env('MAIL_TO_ADDRESS'));
        foreach ($emails as $recipient) {
            Mail::to($recipient)->send(new Inquiry($contact));
        }

        return redirect()->back()->with('success', 'Well received, we will respond to your inquiry as soon as possible');
    }
}
