<?php

namespace App\Exceptions;

use App\Http\Middleware\Languages;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function render($request, Throwable $e)
    {
        if($request->hasSession()) {
            // Get cookie
            $cookie = $request->getSession()->get('locale');
            // Set locale
            app()->setLocale($cookie);
        } else {
            app()->setLocale(Languages::$languages[0]);
        }

        if($e instanceof NotFoundHttpException) {
            return response()->view('errors.404', [], 404);
        }

        return parent::render($request, $e);
    }

    public function report(Throwable $e)
    {
        if ($this->shouldReport($e)) {
            $this->sendEmail($e);
        }

        parent::report($e);
    }

    /**
     * Sends an email to the developer about the exception.
     *
     * @param  Throwable  $exception
     * @return void
     */
    public function sendEmail(Throwable $exception)
    {
        try {
            $e = FlattenException::createFromThrowable($exception);

            $handler = new HtmlErrorRenderer(true);
            $css = $handler->getStylesheet();
            $content = $handler->getBody($e);
            
            if (App::isProduction()) {
                Mail::send('emails.exception', compact('css','content'), function ($message) {
                    $message
                        ->to('tosettil@gmail.com')
                        ->subject('Exception: ' . \Request::fullUrl());
                });
            }
        } catch (Throwable $err) {
            error_log($err->getMessage());
        }
    }

}
