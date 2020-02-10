<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserMeta;

class UserController extends Controller
{
    //

    public function user_details(Request $request){

        // retrieve the instance of that user
        $user = Auth::user();

        return response()->json(['success' => $user]);
    }

    /**
     *  Get user details stored in the users_meta table
     * 
     *  @return App\User
     */
    public function getUserMeta () {
        $usermeta = UserMeta::find();
    }

}
