<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{

    public function changeLanguage($language, Request $request) {
        $request->session()->put('lang', $language);
        //return redirect()->back();
        return Redirect::back();

    }


}

