<?php

namespace App\Orchid\Screens\QuizParticipant;

use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use App\Orchid\Layouts\QuizParticipant\ParticipantListLayout;
use App\Models\QuizParticipant;
use Orchid\Screen\Actions\Link;

class ParticipantListScreen extends Screen
{
    /**
      * Display header name.
      *
      * @var string
      */
     public $name = 'Participants';


     /**
      * Display header description.
      *
      * @var string
      */
     public $description = 'All participants';


     /**
      * Query data.
      *
      * @return array
      */
     public function query(): array
     {
         $participants = QuizParticipant::filters()
                 ->orderBy('created_at', 'desc');
         return [
             'participants' => $participants->paginate()
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
             Link::make('Create new')
                 ->icon('pencil')
                 ->route('platform.quiz.edit')
                 ->class('btn btn-primary')
         ];
     }

     /**
      * Views.
      *
      * @return \Orchid\Screen\Layout[]|string[]
      */
     public function layout(): array
     {
         return [
             ParticipantListLayout::class
         ];
     }

     /**
      * @return TD[]
      */
     private function remove(QuizParticipant $participant)
     {
         $participant->delete();

         Alert::info('You have successfully deleted the quiz.');

         return redirect()->route('platform.quiz.list', ['type' => $this->type]);
     }
 }

