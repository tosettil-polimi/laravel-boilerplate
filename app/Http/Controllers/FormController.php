<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\CtaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function ctaForm(Request $request) {
        $validation = Validator::make($request->all(), [
            'nome' => 'string|required',
            'email' => 'email|required',
            'honey_pot' => 'string|nullable|max:0',
            'messaggio' => 'string|required',
            'privacy' => 'accepted',
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->withErrors($validation);
        }

        Mail::send(new CtaMail($request->all()));

        PrivacyController::insertConsentSolution($request->email, $request->nome, '', $request->ip());

        return redirect()
            ->to('thank-you');
     }

    public function contactForm(Request $request) {
        $validation = Validator::make($request->all(), [
            'nome' => 'string|required',
            'privacy' => 'accepted',
            'email' => 'email|required',
            'telefono' => 'string|required',
            'honey_pot' => 'string|nullable|max:0',
            'soggetto' => 'string|nullable',
            'messaggio' => 'string|nullable'
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->withErrors($validation);
        }

        Mail::send(new ContactMail($request->all()));

        PrivacyController::insertConsentSolution($request->email, $request->nome, '', $request->ip());

        return redirect()
            ->to('thank-you');
    }
}
