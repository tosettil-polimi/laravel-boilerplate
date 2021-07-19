<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PrivacyController extends Controller
{
    public function privacyPolicy(Request $request)
    {
        if (empty(config('app.iubenda'))) abort(400, 'IUBENDA_SITE_ID env not found');

        $privacy = Http::get('https://www.iubenda.com/api/privacy-policy/' . config('app.iubenda') . '/only-legal')->json();

        if (!$privacy['success']) abort(400, 'Privacy policy api not found');

        return view('privacy-policy', [
            'privacy' => $privacy['content']
        ]);
    }

    public function cookiePolicy(Request $request)
    {
        if (empty(config('app.iubenda'))) abort(400, 'IUBENDA_SITE_ID env not found');

        $privacy = Http::get('https://www.iubenda.com/api/privacy-policy/' . config('app.iubenda') . '/cookie-policy')->json();

        if (!$privacy['success']) abort(400, 'Cookie policy api not found');

        return view('cookie-policy', [
            'cookies' => $privacy['content']
        ]);
    }
}
