<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Navigation extends Controller
{
    //Navigation parts

    public function home(){
        return view('home');
    }

    public function results(){
        return view('results');
    }

    public function student(){
        return view('student');
    }

    public function class(){
        $class = DB::table('classses')->get();
        return view('class',compact('class'));
    }

    public function teacher(){
        return view('teacher');
    }

    public function subject(){
        return view('subject');
    }

    public function result(){
        return view('result');
    }

    public function admin(){
        return view('admin');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

}
