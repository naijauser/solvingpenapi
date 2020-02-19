<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use App\UserMeta;
use App\User;
use App\Question;

class UserController extends Controller
{
    //
    private $statusOk = 'OK';


    public function getMyDetails (Request $request){

        // retrieve the instance of that user
        $user = Auth::user();

        //Get the other user details
        $userMeta = UserMeta::where('user_id', $user->id)->first();

        return response()->json(['user' => $user, 'userMeta' => $userMeta], 200);
    }

    public function updateMyDetails (Request $request) {

        // Array of columns which should not be updated by the client
        $noUpdateColumns = [
            'id', 
            'email_verified_at',
            'password',
            'created_at',
            'updated_at',
            'remember_token'
        ];

        // Get authenticated user
        $user = Auth::user();

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
        $user->updated_at = now();
        $user->save();

        return response()->json(['status' => 'updated'], 200);
    }


    /**
     *  Grab all the questions asked by user
     * 
     *  @return int
     * 
     */
    public function getMyAskedQuestions (Request $request) {

    }

    /**
     *  Grab all the questions answered by user
     * 
     *  @return int
     * 
     */
    public function getMyAnsweredQuestions (Request $request) {
        //
    }

}
