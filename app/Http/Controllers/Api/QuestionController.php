<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller {
    private $statusOk = 'OK';
    private $statusDeleted = 'deleted';

    public function addQuestion (Request $request) {
         // Get authenticated user
         $user = Auth::user();

         // Array of columns which should not be updated by the client
        $noUpdateColumns = [
            'id', 
            'user_id',
            'question_state',
            'created_at',
            'updated_at'
        ];

        // Grab the request body
        $requestData = $request->all();

        // Get the table name associated with the User model
        $getModelTable = with(new User)->getTable();

        // Loop through the request body and verify that
        // the request keys tally with the column name
        foreach($requestData as $key => $value) {
            // echo $key . ' ' . $value . '<br>';

            // Check if table has column name $key
            $hasColumn = Schema::hasColumn($getModelTable, $key);

            if ($hasColumn) {
                if (in_array($key, $noUpdateColumns)) {
                    return response()->json([
                        'message' => 'Column name ' . $key . ' not acceptable.'
                    ], 406);
                } else {
                    $user->$key = $value;
                }
            } else {
                return response()->json(['message' => 'Column name ' 
                    . $key . 
                    ' does not exist in the table. Please refer to the API docs.'], 406);
            }
        }
        $user->user_id = $user->id;
        $user->updated_at = now();
        $user->created_at = now();
        $user->save();

        return response()->json(['status' => $this->statusUpdated], 200);
    } 

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

    public function deleteQuestion($questionId) {
        $question = Question::find($questionId);

        if ($question) {
            $question->delete();

            return response()->json(['status' => $this->statusDeleted]);
        } else {
            return response()->json(['message' => 'No question found with that id'], 404);
        }
    }
}
