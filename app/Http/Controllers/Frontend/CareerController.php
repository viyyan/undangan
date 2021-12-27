<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;


class CareerController extends Controller
{
    public function index(Request $request)
    {

        $careers = Career::where('status', 1)->get();
        $data = array(
            "title" => "Want to Join Us?",
            "cssFileName" => "career",
            "classBody" => "p-career bg--main-red-4",
            "careers" => $careers
        );
        return view('frontend.pages.careers.main', $data);
    }

    /**
     * Article detail page
     *
     * @return void
     */
    public function show(string $slug,  Request $request)
    {
        $career = Career::where('slug', $slug)->where('status', 1)->first();
        $data = array(
            "title" => "Want to Join Us?",
            "cssFileName" => "career-detail",
            "classBody" => "p-career-detail bg--main-red-4",
            "career" => $career
        );
        return view('frontend.pages.careers.details', $data);
    }

    public function applyJob(Request $request)
    {
        $validated = $request->validate([
            'career_id' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required|max:255',
            'file' => 'mimes:pdf,doc,docx,ppt,pptx|max:2000',
        ]);

        $filename = null;
        if ($request->file('file') != null) {
            $file = $request->file('file');
            $filename = time()."_".$file->getClientOriginalName();
            $dir = 'assets/frontend/career_attachment';
            $file->move($dir, $filename);
        }

        // $contact = Contact::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
		// 	'file' => $filename,
		// 	'message' => $request->message,
		// ]);

        $emails = explode(',', env('MAIL_TO_ADDRESS'));
        foreach ($emails as $recipient) {
            // Mail::to($recipient)->send(new Inquiry($contact));
        }

        return redirect()->back()->with('success', 'Well received, we will respond to your inquiry as soon as possible');
    }
}
