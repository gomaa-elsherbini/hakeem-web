<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeLangController extends Controller
{
    public function changeLanguage($locale){

        if (in_array($locale, ['ar', 'en'])) {
//
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
