<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function user_details(Request $request){

        // retrieve the instance of that user
        $user = Auth::user();

        return response()->json(['success' => $user]);
    }


}
