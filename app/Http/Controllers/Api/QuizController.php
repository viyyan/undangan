<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Quiz;
use App\Models\QuizOption;
use App\Models\QuizParticipant;
use App\Models\Category;


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
                ->with('options')->with('options.optionChilds')->first();
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
     * Get quiz next
     *
     * @return JSON string
     */
    public function getNextQuiz(Request $request, $step)
    {

        $quiz = Quiz::where('status', 1)
                ->orderBy('order', 'asc')->skip($step - 1);
        $sub_real = $request->sub_options;
        // exclude first answer
        $sub = $this->_removeFirst($sub_real);
        if (isset($sub)) {
            $quiz = $quiz->first();
            if ($quiz->is_check_prev === 1) {
                $options = $quiz->options()->whereJsonContains('sub_options', $sub)->with('optionChilds')->get();
            } else {
                $options = $quiz->options()->with('optionChilds')->get();
            }
            $quiz->options = $options;
        } else {
            $quiz = $quiz->with(['options', 'options.optionChilds'])->first();
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
            "prev_step" => $prev_step
        ]);
    }


    /**
     * Post answers
     *
     * @return JSON string
     */
    public function postAnswers(Request $request)
    {
        $answers_real = $request->post("answers");
        // exclude first answer
        $answers = $this->_removeFirst($answers_real);
        if (empty($answers)) return $this->respondValidationError("answers can't be empty!");
        $categories = Category::select(['id', 'name'])
                ->where('status', 1)
                ->whereJsonContains('quiz_answers', $answers)
                ->get();
        return $this->response->array([
            "categories" => $categories,
            "answers" => $answers_real
        ]);
    }


    /**
     * Post answers
     *
     * @return JSON string
     */
    public function postParticipant(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'answers' => 'required|max:255',
            'category_ids' => 'array',
        ]);

        $answers = $request->post("answers");
        $cats = $request->post("category_ids");
        $res = QuizParticipant::create($request->post());
        if (empty($res)) return $this->respondValidationError("failed, please try again");
        return $this->response->array([
            "redirect_url" => urldecode(route('case-study', ["type_of_research" => join(",",$cats)])),
            "answers" => $answers
        ]);
    }


    private function _removeFirst($answers) {
        $a = explode(".", $answers);
        array_shift($a);
        return "0.". implode(".", $a);
    }
}
