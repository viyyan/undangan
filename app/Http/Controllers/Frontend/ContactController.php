<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


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
            'file' => 'mimes:pdf,doc,docx,ppt,pptx|max:2000',
        ]);

        $filename = null;
        if ($request->file('file') != null) {
            $file = $request->file('file');
            $filename = time()."_".$file->getClientOriginalName();
            $dir = 'assets/frontend/contact_attachment';
            $file->move($dir, $filename);
        }

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
			'file' => $filename,
			'message' => $request->message,
		]);
        return redirect()->back()->with('success', 'Well received, we will respond to your inquiry as soon as possible');
    }
}
