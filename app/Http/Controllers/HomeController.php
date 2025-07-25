<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Make sure resources/views/home.blade.php exists
    }

    public function about()
    {
        return view('about'); // Optional
    }

    public function search()
    {
        return view('search'); // Optional
    }

    public function mission()
    {
        return view('mission'); // this will load mission.blade.php
    }

    public function choose()
    {
        return view('choose'); // this will load choose.blade.php
    }
    
     public function privacy()
    {
        return view('privacy'); // this will load choose.blade.php
    }
    
     public function terms()
    {
        return view('terms'); // this will load choose.blade.php
    }
    
     public function contact()
    {
        return view('contact'); // this will load choose.blade.php
    }
    
}
