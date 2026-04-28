<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function switch($locale)
    {
        $allowed = ['en', 'ru', 'kz'];
        if (in_array($locale, $allowed)) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    }
}