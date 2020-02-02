<?php

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['middleware' => 'auth:api'], function () {
    // to put all routes that needs authentication
    Route::post('/user', 'Api\UserController@user_details');

    Route::get('email/resend', 'Api\VerificationApiController@resend')->name('verificationapi.resend');

});

Route::post('/credentials/register', 'Api\AuthenticationController@register_user');
Route::post('/credentials/login', 'Api\AuthenticationController@login_user');
Route::post('/passwordreset/email', 'Api\ForgotPasswordController@sendResetLinkEmail');
Route::post('/passwordreset/reset', 'Api\ResetPasswordController@reset');
Route::get('account/verify/{id}', 'Api\VerificationApiController@verify')->name('verificationapi.verify')->middleware('signed');

