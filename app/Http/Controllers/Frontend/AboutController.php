<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public $title = "About Us - ";

    /**
     * Template Section
     *
     * @return void
     */
    private function show(Request $request, $subtitle, $desc, $section)
    {
        $data = [
            'title' => $this->title.$subtitle,
            'desc' => $desc
        ];
        return view('frontend.pages.about.sections.'.$section, $data);
    }

    /**
     * Vision Section
     *
     * @return void
     */
    public function vision(Request $request)
    {
        $desc = "";
        return $this->show($request, "Vission & Mission", $desc, 'vision');
    }

    /**
     * Organization Section
     *
     * @return void
     */
    public function organization(Request $request)
    {
        $desc = "";
        return $this->show($request, "Organization Structure", $desc, 'organization');
    }

    /**
     * Shareholder Section
     *
     * @return void
     */
    public function shareholder(Request $request)
    {
        $desc = "";
        return $this->show($request, "Shareholder Structure", $desc, 'shareholder');
    }

    /**
     * Board Commisioner Section
     *
     * @return void
     */
    public function board(Request $request)
    {
        $desc = "";
        return $this->show($request, "Board of Commisioner & Directors", $desc, 'board');
    }

    /**
     * Indonesia Management Section
     *
     * @return void
     */
    public function idManagement(Request $request)
    {
        $desc = "";
        return $this->show($request, "Indonesia Management", $desc, 'id-management');
    }

     /**
     * Audit Comitee Section
     *
     * @return void
     */
    public function audit(Request $request)
    {
        $desc = "";
        return $this->show($request, "Audit Comitee", $desc, 'audit');
    }


    /**
     * Coorporate Secretary Section
     *
     * @return void
     */
    public function coorporate(Request $request)
    {
        $desc = "";
        return $this->show($request, "Coorporate Secretary", $desc, 'coorporate');
    }

    /**
     * Whistle Blowing Section
     *
     * @return void
     */
    public function whistle(Request $request)
    {
        $desc = "";
        return $this->show($request, "Whistle Blowing System", $desc, 'whistle');
    }

}
