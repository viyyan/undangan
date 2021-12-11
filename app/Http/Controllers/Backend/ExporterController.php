<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Exports\ContactExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExporterController extends Controller
{
    public function exportContact( Request $request)
    {
        return Excel::download(new ContactExport, 'contacts.xlsx');
    }
}
