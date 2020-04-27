<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function home(){
        return view('admin.dashboard');
    }
    public function user($id){
        $user=User::where('id',$id)->first();
        return view('admin.user',compact('user'));
    }
    
}
