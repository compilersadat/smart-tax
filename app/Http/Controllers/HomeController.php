<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function update(Request $request){
        $user=User::where('id',Auth::user()->id)->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->address=$request->address;
        if($request->file('image')) {
            $upload = $request->file('image');
            $fileformat = time() . '.' . $upload->getClientOriginalName();
            if ($upload->move('uploads/users/', $fileformat)) {
                $user->profile_image = $fileformat;
            }
            
        }

        if($user->update()){
            return redirect()->back()->with('success','Profile Successfully Updated.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

}
