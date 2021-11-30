<?php

namespace App\Orchid\Layouts\QuizParticipant;

use App\Models\QuizParticipant;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;


class ParticipantListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'participants';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                    ->sort()
                    ->filter(Input::make())
                    ->render(function (QuizParticipant $participant) {
                        return Link::make($participant->name)
                            ->route('platform.participant.edit', $participant);
                    }),

            TD::make('company', 'Company')
                ->sort()
                ->render(function (QuizParticipant $participant) {
                    return $participant->company;
                }),

            TD::make('phone', 'Phone')
                ->sort()
                ->render(function (QuizParticipant $participant) {
                    return $participant->phone;
                }),

            TD::make('email', 'Email')
                ->sort()
                ->render(function (QuizParticipant $participant) {
                    return $participant->email;
                }),

            TD::make('created_at', 'Date')
                ->sort()
                ->render(function (QuizParticipant $participant) {
                    return $participant->created_at->format('d F Y');
                }),
        ];
    }

}
