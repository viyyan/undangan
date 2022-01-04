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
                $opt_answers = $this->_getPathAnswers($sub_real);
                $opt_answers;
                $query = $quiz->options()->with('optionChilds');
                $query->whereIn('code', array_column($opt_answers, 'code'));
                $options = $query->get()->toArray();
                foreach ($options as $idx=>$item) {
                    $key = array_search($item['code'], array_column($opt_answers, 'code'));
                    if ($key >= 0 && isset($opt_answers[$key]['child'])) {
                        $opt_child = $opt_answers[$key]['child'];
                        $children = array();
                        $options[$idx]['option_childs'] = array_filter( $options[$idx]['option_childs'], function($child) use($opt_child) {
                            return in_array($child['code'], $opt_child);
                        });
                    }
                }
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
            ->where('type', 'research')
            ->where('status', 1)
            ->whereJsonContains('quiz_answers', $answers);

        if ($categories->count() == 0) {
            $categories->orWhereJsonContains('quiz_answers', $answers_real);
        }


        $categories = $categories->get();

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

    private function _countAnswers($answers) {
        $a = explode(".", $answers);
        return count($a);
    }

    private function _getFirst($answers, $total) {
        $a = explode(".", $answers);
        $a = array_slice($a, 0, $total);
        return implode(".", $a);
    }

    private function _getPathAnswers($answers) {
        $opt_answers = Category::select(['quiz_answers'])
            ->where('status', 1)
            ->whereNotNull('quiz_answers')
            ->where('type', 'research')
            ->pluck('quiz_answers')
            ->toArray();
        $new_arr = array_unique(array_merge(...$opt_answers));
        $data = $this->_getCodes($answers, $new_arr);
        return $data;
    }


    private function _getCodes($answers_real, $arr_codes) {
        $answers = $this->_removeFirst($answers_real);
        $data = [];
        $count = $this->_countAnswers($answers);
        foreach($arr_codes as $item) {
            $arr = explode(".", $item);
            $slice_arr = array_slice($arr, 0, $count);
            $ans = implode(".", $slice_arr);
            if (($ans === $answers || $ans === $answers_real) && $count < count($arr)) {
                $code['code'] = $arr[$count];
                if ($code['code'] == 0) continue;
                $branch = explode("-", $code['code']);
                if (is_array($branch) && count($branch) > 1) {
                    $code['code'] = $branch[0];
                    $code['child'][] = $branch[1];
                    $code['child'] = array_unique($code['child']);
                    if (count($code['child']) > 0) {
                        sort($code['child']);
                    }
                    $data[$branch[0]] = $code;
                } else if ($code != "" && !in_array($code, $data)) {
                    $data[$arr[$count]] = $code;
                }
            }
        }
        sort($data);
        $ex_design_feature = false;
        $first = substr($answers_real, 0, 1);
        if ($first == 2 && strlen($answers_real) > 3) {
            $last = substr($answers_real, 2, strlen($answers_real));
            if ($last !== "1.1.1") {
                $ex_design_feature = true;
            }
        }
        if ($ex_design_feature) {
            foreach($data as $key=>$item) {
                // hardcode
                if ($item['code'] == 1 && isset($item['child'])) {
                    $child = array_diff($item['child'], ['4','5']);
                    $data[$key]['child'] = $child;
                    break;
                }
            }
        }
        return $data;
    }
}
