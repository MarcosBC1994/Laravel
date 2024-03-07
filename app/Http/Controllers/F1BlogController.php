<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class F1BlogController extends Controller
{
    Function index(){
        return view('pages.f1blog.index');
    }
    Function gallery(){
        return view('pages.f1blog.gallery');
    }
    Function blog(){
        return view('pages.f1blog.blog');
    }
    Function contact(){
        return view('pages.f1blog.contactus');
    }



}
