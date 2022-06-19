<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ConfigController extends Controller
{
    public function changeLocale($locale) {
        session(['locale' => $locale]);
        return back();
    }
}
