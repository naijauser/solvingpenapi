<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;

class AuthenticationController extends Controller
{
    //
    use VerifiesEmails;

    private $statusOK  =   'OK';

    public function register_user(Request $request) {

        // Validate the user details
        $validator = Validator::make($request->all(), [
                'firstName' => 'required|min:3',
                'lastName' => 'required|min:3',
                'email' => 'required|email',
                'password' => 'required|alpha_num|min:6',
                /*'confirm_password' => 'required|same:password',
                'clint' =>'required'*/
            ]
        );
        
        if($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 406);
        }

        // collect inputs
        $input = array(
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        );

        // check if email already registered
        if(!is_null(User::where('email', $request->email)->first())) {
            return response()->json(['message' => 'Sorry! this email is already registered'], 406);
        }

        // create and return data
        $user = User::create($input);
        //send mail to that user
        // $user->sendApiEmailVerificationNotification();

        //if the mail was successfully sent do below
        // $success['token'] = $user->createToken('token')->accessToken;

        return response()->json([ 'status' => $this->statusOK, 'data' =>  $user], 200);
    }

    public function login_user(Request $request) {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            
            // getting auth user after auth login
            $user = Auth::user();

            $token = $user->createToken('token')->accessToken;

            // if($user->email_verified_at !== NULL){
            //     $success['message'] = "Success! you are logged in successfully";
            //     $success['token'] = $token;
            // }else{
            //     return response()->json(['error'=>'Please Verify Email'], 401);
            // }
            return response()->json(
                [
                    'status' => $this->statusOK, 
                    'data' => [ 'token'=> $token, 'user' => $user]
                ], 200);
        }
        else {
            return response()->json(['message'=>'Login failed'], 401);
        }
    }

    public function testController () {
        return response()->json(["OK" => "Controller works"]);
    }
}
