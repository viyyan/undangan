<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Helpers\Template;

class HomeController extends Controller
{
    /**
     * Home page
     *
     * @return void
     */
    public function index(Request $request)
    {
        return view('errors.404');
    }


    public function guest(Request $request, $guest)
    {
        $guest = Guest::where("slug", $guest)->first();

        if ($guest == null) {
            abort(404);
            return;
        }

        $data = array(
            "guest" => $guest
        );
        return view('frontend.pages.index', $data);
    }

    public function guestSubmit(Request $request)
    {
        $guest = Guest::findOrFail($request->id);
        $guest->address = $request->address;
        $guest->total_guests = $request->total_guests;
        if ($guest->type != 1) $guest->total_guests = 0;
        $guest->confirmed = $request->confirmed;
        $guest->status = 3;
        $guest->save();
        return redirect()->route('guest', $guest->slug);
    }
}
