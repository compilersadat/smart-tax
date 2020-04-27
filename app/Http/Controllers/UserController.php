<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function services()
    {
        return view('services');
    }
    public function partners()
    {
        return view('partners');
    }
    public function contact()
    {
        return view('contact');
    }
}
