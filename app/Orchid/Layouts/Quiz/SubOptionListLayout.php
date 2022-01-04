<?php

namespace App\Orchid\Layouts\Quiz;

use App\Models\QuizOption;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\ModalToggle;


class SubOptionListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'sub_options';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('item', 'Answers Combination')
                ->render(function ($item) {
                    return $item;
                }),

            TD::make('question', 'Question x Answer Code')
                ->render(function ($item) {
                    if (empty($item)) return "";
                    $arr = explode(".",$item);
                    $res = "";
                    foreach ($arr as $key=>$q) {
                        $res .= "Q".($key + 1).": ".$q;
                        if ($key < count($arr) - 1) $res .= ", ";
                    }
                    return $res;
                }),

            TD::make('actions', 'Details')
                ->render(function ($item) {
                    return ModalToggle::make('Show Details')
                        ->modal('detailsModal')
                        ->icon('full-screen')
                        ->asyncParameters($item);
                }),



            TD::make('actions', 'Actions')
                ->render(function ($item) {
                    return Button::make('Remove')
                        ->class('btn btn-danger')
                        ->method('removeSub', [$item]);
                }),

        ];
    }

}
