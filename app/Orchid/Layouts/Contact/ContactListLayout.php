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

            TD::make('phone', 'Phone')
                ->render(function (Contact $contact) {

                    return $contact->phone;
                }),

            TD::make('subject', 'Subject')
                ->render(function (Contact $contact) {

                    return $contact->subject;
                }),

            TD::make('message', 'Message')
                ->render(function (Contact $contact) {

                    return $contact->message;
                }),

            TD::make('created_at', 'Date')
                ->render(function (Contact $contact) {
                    return $contact->created_at->format('d F Y');
                }),
        ];
    }
}
