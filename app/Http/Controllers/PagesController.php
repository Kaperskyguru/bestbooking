<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
