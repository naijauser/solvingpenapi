<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an JSON response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    // public function render($request, Exception $e)
    // {
    //     if ($e instanceof ModelNotFoundException) {
    //         return response()->json([
    //             'error' => 'Entry for '.str_replace('App\\', '', $e->getModel()).' not found'
    //         ], 404);
    //     } elseif ($e instanceof AuthorizationException) {
    //         return response()->json([
    //             'error' => 'Authorization failed'
    //         ], 401 );
    //     } elseif ($e instanceof TokenMismatchException) {
    //         return response()->json([
    //             'error' => 'Token mismatch!'
    //         ], 401);
    //     } elseif ($e instanceof SuspiciousOperationException) {
    //         return response()->json([
    //             'error' => 'Authentication Error'
    //         ], 400);
    //     } elseif ($e instanceof MethodNotAllowedHttpException) {
    //         return response()->json([
    //             'error' => 'Method not allowed'
    //         ], 405);
    //     }  elseif ($e instanceof AuthenticationException) {
    //         return response()->json([
    //             'error' => 'Authentication failed'
    //         ], 401);
    //     } elseif ($e instanceof ValidationException) {
    //         return response()->json([
    //             'error' => 'Validation failed'
    //         ], 403);
    //     } elseif ($e instanceof HttpResponseException) {
    //         return response()->json([
    //             'error' => 'Http Response error'
    //         ], 400);
    //     }

    //     return response()->json([
    //         'error' => 'An error occured'
    //     ], 400);

    // }
}
