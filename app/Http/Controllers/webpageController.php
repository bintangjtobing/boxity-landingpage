<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webpageController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function career()
    {
        return view('home.career');
    }
}
