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

    private $successStatus  =   200;

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
            return response()->json(['status' => 'FAIL', 'message' => $validator->errors()], 406);
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
            return response()->json(['status' => 'FAIL', 'message' => 'Sorry! this email is already registered'], 406);
        }

        // create and return data
        $user = User::create($input);
        //send mail to that user
        // $user->sendApiEmailVerificationNotification();

        //if the mail was successfully sent do below
        // $success['token'] = $user->createToken('token')->accessToken;
        $success['status'] = 'OK';
        $success['user'] = $user;

        return response()->json([ 'status' => 'OK', 'success' =>  $success], $this->successStatus);
    }

    public function login_user(Request $request) {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            
            // getting auth user after auth login
            $user = Auth::user();

            $token = $user->createToken('token')->accessToken;
            $success['status'] = 'OK';
            $success['token'] = $token;
            $success['user'] = $user;

            // if($user->email_verified_at !== NULL){
            //     $success['message'] = "Success! you are logged in successfully";
            //     $success['token'] = $token;
            // }else{
            //     return response()->json(['error'=>'Please Verify Email'], 401);
            // }
            return response()->json(['success' => $success ], $this->successStatus);
        }
        else {
            return response()->json(['error'=>'Login failed'], 401);
        }
    }

    public function testController () {
        return response()->json(["OK" => "Controller works"]);
    }
}
