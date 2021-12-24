<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class additionalController extends Controller
{
    public function terms()
    {
        return view('additional.terms');
    }
    public function privacy()
    {
        return view('additional.privacy');
    }
    public function faqs()
    {
        return view('additional.faqs');
    }
    public function plans()
    {
        return view('additional.plans');
    }
    public function cookie()
    {
        return view('additional.cookie');
    }
    
}
