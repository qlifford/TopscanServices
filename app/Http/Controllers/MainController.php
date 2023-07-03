<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function shop()
    {
        return view('main.shop');
    }

    public function services()
    {
        return view('main.services');
    }

    public function about()
    {
        return view('main.about');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function blog()
    {
        return view('main.blog');
    }
}
