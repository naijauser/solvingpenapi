<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller {
    private $statusOk = 'OK';

    public function getQuestions ($userId) {
        $userQuestions = Question::where('user_id', $userId)->get();

        if (sizeof($userQuestions) == 0) {
            return response()->json(['message' => 'No questions associated with user'], 404);
        } else {
            return response()->json(['status' => $this->statusOk, 'data' => $userQuestions], 200);
        }
    }

    public function getQuestion ($questionId) {
        $question = Question::find($questionId);

        if ($question) {
            return response()->json(['status' => $this->statusOk, 'data' => $question], 200);
        } else {
            return response()->json(['message' => 'No question found with that id'], 404);
        }
    }

    public function getAnswers (Request $request, $questionId) {

    }

    public function getComments (Request $request, $questionId) {

    }
}
