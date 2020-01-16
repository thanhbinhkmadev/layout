<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function blog()
    {
    	return view('blog');
    }

    public function about()
    {
    	return view('front_end.about');
    }

    public function contact()
    {
    	return view('front_end.contact'); 
    }
}
