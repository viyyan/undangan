<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Quiz;
use App\Models\QuizOption;


class QuizController extends ApiController
{
    /**
     * Get Quiz
     *
     * @return JSON string
     */
    public function getQuiz(Request $request)
    {
        $quiz = Quiz::where('status', 1)->orderBy('order', 'asc')->with('options')->first();
        $next_id = null;
        if (isset($quiz)) {
            $next = Quiz::where('status', 1)
                ->where('order', '>', $quiz->id)
                ->orderBy('order','asc')
                ->first();
            if (isset($next)) $next_id = $next->id;
        }
        return $this->response->array([
            "quiz" => $quiz,
            "next_id" => $next_id
        ]);
    }


    /**
     * Get exhibitors
     *
     * @return JSON string
     */
    public function getNextQuiz(Request $request, $next_id)
    {

        $quiz = Quiz::where('id', $next_id);
        $sub = $request->sub_options;
        // if (isset($sub)) {
        //     $quiz = $quiz->first();
        //     $quiz->options = $quiz->options()->whereJsonContains('sub_options', 'like', '%'.$sub.'%')->get();
        // } else {
            $quiz = $quiz->with('options')->first();
        // }
        $next_id = null;
        if (isset($quiz)) {
            $next = Quiz::where('status', 1)
                ->where('order', '>', $quiz->id)
                ->orderBy('order','asc')
                ->first();
            if (isset($next)) $next_id = $next->id;
        }
        return $this->response->array([
            "quiz" => $quiz,
            "next_id" => $next_id
        ]);
    }
}
