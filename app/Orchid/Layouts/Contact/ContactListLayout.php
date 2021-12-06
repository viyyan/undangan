<?php

namespace App\Orchid\Layouts\Contact;

use App\Models\Contact;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\Input;

class ContactListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'contacts';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->sort()
                ->filter(Input::make())
                ->render(function (Contact $contact) {
                    return $contact->name;
                }),

            TD::make('email', 'Email')
                ->render(function (Contact $contact) {
                    return $contact->email;
                }),

            TD::make('message', 'Message')
                ->render(function (Contact $contact) {

                    return $contact->message;
                }),

            TD::make('file', 'Briefs')
                ->render(function (Contact $contact) {
                    if ($contact->getAttachedFile() != null) {
                        return '<a href="'.$contact->getAttachedFile().'" target="_blank">download</a>';
                    } else {
                        return '-';
                    }
                }),
            TD::make('created_at', 'Date')
                ->render(function (Contact $contact) {
                    return $contact->created_at->format('d F Y');
                }),
        ];
    }
}
