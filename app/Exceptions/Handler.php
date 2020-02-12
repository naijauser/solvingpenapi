<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
    public function render($request, Exception $e)
    {
        // Replace default 404 error with json response
        // if ($exception instanceof ModelNotFoundException) {
        //     return response()->json([
        //         'error' => 'Resource Not Found'
        //     ], 404);
        // }
        // return response()->json([
        //     'error' => 'Resource Not Found'
        // ], 404);

        // return parent::render($request, $exception);

        if (method_exists($e, 'render') && $response = $e->render($request)) {
            return Router::toResponse($request, $response);
        } elseif ($e instanceof Responsable) {
            return $e->toResponse($request);
        }

        $e = $this->prepareException($e);

        if ($e instanceof HttpResponseException) {
            return response()->json([
                'error' => 'Response Error'
            ]);
        } elseif ($e instanceof AuthenticationException) {
            return response()->json([
                'error' => 'Authentication Error'
            ]);
        } elseif ($e instanceof ValidationException) {
            return response()->json([
                'error' => 'Validation Error'
            ]);
        }

        return response()->json([
            'error' => 'Invalid Endpoint! Please check the API docs.'
        ]);
    }
}
