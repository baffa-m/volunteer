<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\State;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        view()->share('categories', Category::all());
    }


    public function index() {
        $categories = Category::all();
        $states = State::all();
        return view('welcome', compact('categories', 'states'));
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

    public function registerOrganization() {
        return view('auth.register_as_organization');
    }

    public function test() {
        return view('recruit.create');
    }
}
