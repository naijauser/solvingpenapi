<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserMeta;
use App\Question;

class UserController extends Controller
{
    //

    public function getUserDetails (Request $request){

        // retrieve the instance of that user
        $user = Auth::user();

        return response()->json(['success' => $user]);
    }

    /**
     *  Get user details stored in the users_meta table
     * 
     *  @return App\User
     */
    public function getUserMetaDetails (Request $request) {
        $usermeta = UserMeta::find();
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
