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
    private $statusUpdated = 'updated';

    public function getUserDetails ($id){

        // retrieve the instance of that user
        $user = User::where('id', $id)->first();

        if ($user) {
            //Get the other user details
            $userMeta = UserMeta::where('user_id', $user->id)->first();

            return response()->json(
                [
                    'status' => $this->statusOk, 
                    'data' => ['user' => $user, 'userMeta' => $userMeta]
                ], 200);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    public function updateUserDetails (Request $request, $id) {
        
        // Get authenticated user
        $user = Auth::user();

        // Verify that id passed is that of logged in user
        if ($user->id != $id) {
            return response()->json([
                'message' => 'Operation not acceptable.'
            ], 406);
        }

        // Array of columns which should not be updated by the client
        $noUpdateColumns = [
            'id', 
            'email_verified_at',
            'password',
            'created_at',
            'updated_at',
            'remember_token'
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
        $user->updated_at = now();
        $user->save();

        return response()->json(['status' => $this->statusUpdated], 200);
    }

}
