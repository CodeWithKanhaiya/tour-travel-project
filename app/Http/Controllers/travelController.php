<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class travelController extends Controller
{
    public function index(){
        return view('travelproject.index');
    }
    public function contact(){
        return view('travelproject.contact');
    }
    public function about(){
        return view('travelproject.about');
    }
    public function gallery(){
        return view ('travelproject.trip');
    }
    public function blog(){
        return view ('travelproject.blog');
    }
    public function trip(){
        return view ('travelproject.trip');
    }
}
