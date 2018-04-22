<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LanguageController extends Controller {
    //
    public function setLocale($lang) {
        if (array_key_exists($lang, config('app.locales'))) {
            session(['applocale' => $lang]);
        }
        return back()->withInput();
    }
}
