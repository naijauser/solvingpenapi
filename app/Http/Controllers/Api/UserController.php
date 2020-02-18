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

    public function updateUserDetails (Request $request) {
        // $requestArray = $request->all();
        $requestData = $request->all();

        
        
        // foreach($requestData as $key => $value) {
        //     echo $key . ' ' . $value . '<br>';
        // }

        $getModelTable = with(new User)->getTable();
        $hasColumn = Schema::hasColumn($getModelTable, 'email');

        //  var_dump($requestData);

        // return response()->json(['user' => $requestArray], 200);
        return [
            "data" => $requestData, 
            "type" => getType($requestData),
            "modelTable" => $getModelTable,
            "hasColumn" => $hasColumn
        ];
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
