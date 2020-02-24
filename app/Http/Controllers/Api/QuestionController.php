<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller {
    private $statusOk = 'OK';

    public function getQuestions (Request $request, $userId) {
        // $userQuestions = Question::where('user_id', $userId)->get();

        return response()->json(['status' => $statusOk]);
    }

    public function getQuestion ($questionId) {

    }

    public function getAnswers (Request $request, $questionId) {

    }

    public function getComments (Request $request, $questionId) {

    }
}
