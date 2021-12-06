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
            'contacts' => Contact::filters()->defaultSort('id')->paginate()
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
