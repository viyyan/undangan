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
        $quiz = Quiz::where('status', 1)
                ->orderBy('order', 'asc')
                ->with('options')->first();
        $next_id = null;
        if (isset($quiz)) {
            $next = Quiz::where('status', 1)
                ->where('order', '>', $quiz->id)
                ->orderBy('order','asc')
                ->first();
            if (isset($next)) $next_id = $next->id;
        } else {
            return $this->respondNotFound();
        }
        $quiz->decor_image_url = $quiz->decorImageUrl();
        $total = Quiz::where('status', 1)->count();

        return $this->response->array([
            "quiz" => $quiz,
            "total" => $total,
            "next_step" => $total > 1 ? 2 : null
        ]);
    }


    /**
     * Get exhibitors
     *
     * @return JSON string
     */
    public function getNextQuiz(Request $request, $step)
    {

        $quiz = Quiz::where('status', 1)
                ->orderBy('order', 'asc')->skip($step - 1);
        $sub = $request->sub_options;
        if (isset($sub)) {
            $quiz = $quiz->first();
            $options = $quiz->options()->whereJsonContains('sub_options', $sub)->get();
            $quiz->options = $options;
        } else {
            $quiz = $quiz->with('options')->first();
        }
        $total = Quiz::where('status', 1)->count();

        $next_step = $step;
        $prev_step = null;
        if (isset($quiz)) {
            if ($step < $total) {
                $next_step = $step + 1;
            }
            if ($step > 1) {
                $prev_step = $step - 1;
            }
        } else {
            return $this->respondNotFound();
        }
        $quiz->decor_image_url = $quiz->decorImageUrl();
        return $this->response->array([
            "quiz" => $quiz,
            "total" => $total,
            "next_step" => $next_step,
            "prev_step" => $prev_step,
        ]);
    }
}
