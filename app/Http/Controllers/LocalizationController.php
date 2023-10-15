<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index($locale) {
        // return $locale;
        // enregistre la variable de session "locale" avec la valeur de la variable $locale, ex.: en ou fr
        session()->put('locale', $locale);
        // redirige l'utilisateur vers la page précédente
        return redirect()->back();
    }
}
