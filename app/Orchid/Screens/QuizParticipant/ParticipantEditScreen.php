<?php

namespace App\Orchid\Screens\QuizParticipant;

use Orchid\Screen\Screen;
use App\Models\QuizParticipant;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;


class ParticipantEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Quiz Participant';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(QuizParticipant $participant): array
    {
        $this->exists = $participant->exists;

        if($this->exists){
            $this->name = 'Edit Quiz Participant';
        }

        return [
            'participant' => $participant
        ];
    }

     /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Save')
                ->method('createOrUpdate')
                ->class('btn btn-success')
                ->canSee(!$this->exists),

            Button::make('Remove')
                ->class('btn btn-danger')
                ->method('remove')
                ->canSee($this->exists),
        ];
    }


    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        $orders = range(1, (QuizParticipant::count() + 1));
        return [
            Layout::rows([
                Input::make('participant.name')
                    ->title('Name'),

                Input::make('participant.company')
                    ->title('Company'),

                Input::make('participant.phone')
                    ->title('Phone'),

                Input::make('participant.email')
                    ->title('Email'),

                Input::make('participant.created_at')
                    ->title('Date'),
            ])
        ];
    }

    /**
     * @param QuizParticipant $participant
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(QuizParticipant $participant)
    {
        $participant->delete();

        Alert::info('You have successfully deleted the participant.');

        return redirect()->route('platform.participant.list');
    }
}
