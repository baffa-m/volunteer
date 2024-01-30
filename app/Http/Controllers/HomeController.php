<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function opportunities() {
        return view('opportunities');
    }

    public function recruit() {
        return view('recruit');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact us');
    }
}
