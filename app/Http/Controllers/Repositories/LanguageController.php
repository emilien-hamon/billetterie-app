<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request) {
        $language = $request->input('language');

        if (in_array($language, ['fr', 'en'])) {
            Session::put('locale', $language);
            App::SetLocale($language);
        }

        return redirect()->back();
    }
}

?>
