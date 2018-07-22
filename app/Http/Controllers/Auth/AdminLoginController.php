<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function _construct(){
        $this->middleware('guest:admin');
    }
    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        //validate form data

        $this->validate($request, [
            'email'=>'required', 
            'password'=>'required|min:6'
        ]);

        //attempt to log user in

        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=>$request->password],$request->remember))
        {
            //redirect to intended location
            return redirect()->intended('admin.dashboard');
        }
        else{
            return redirect()->back()-withInput($request->only('email','remember'));
        };
        
        //if unsuccessfull return to form
        return true;
    }
}
