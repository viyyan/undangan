<?php

namespace App\Orchid\Screens\Contact;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Contact\ContactListLayout;
use App\Models\Contact;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;


class ContactListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Contact Inquiries';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All inquiries';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'contacts' => Contact::filters()->defaultSort('created_at', 'desc')->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Export to Excel')
                ->class('btn btn-primary')
                ->route('contact-export')
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            ContactListLayout::class
        ];
    }

}
