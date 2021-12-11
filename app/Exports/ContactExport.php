<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ContactExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contact::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Email',
            'Message',
            'Attachment',
            'Date',
            'Updated',
        ];
    }
}
