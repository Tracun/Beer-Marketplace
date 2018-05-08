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
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception) {
        // return parent::render($request, $exception);

      if ($this->isHttpException($exception)) {
        switch ($exception->getStatusCode()) {

           // not authorized
           case '403':
               return \Response::view('error.page-error', ['error' => "403 FORBIDDEN"]);
               break;

           // not found
           case '404':
               return \Response::view('error.page-error', ['error' => "404 PAGE NOT FOUND"]);
               break;

           // internal error
           case '500':
               return \Response::view('error.page-error', ['error' => "500 INTERNAL SERVER ERROR"]);
               break;

           default:
               return $this->renderHttpException($exception);
               break;
       }
   } else {
       return parent::render($request, $exception);
   }
    }
}
