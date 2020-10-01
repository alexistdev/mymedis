<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'MyMedis V.1.0 | Aplikasi Dunia Medis Terbaik di Indonesia';
        $nav = 'home';
        return view('frontend.home', compact('title', 'nav'));
    }
}
