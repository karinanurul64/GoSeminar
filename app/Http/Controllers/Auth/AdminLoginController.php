<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;

class AdminLoginController extends Controller
{
    //middleware guest admin
    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }
    //function untuk menampilkan form login admin
    public function showLoginForm(){
        return view('auth.admin-login'); 
    }

    //function buat login
    public function login(Request $request){
        //validasi form data 
        $this->validate($request,[
            'email' => 'required', 'email',
            'password' => 'required', 'min:8', 
        ]);
        //coba log user in
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
             //kalo berhasil, redirect ke lokasi yg di maksud
            
            return redirect()->intended(route('admin.dashboard'));
        }

        //kalo ga berhasil, redirect ke login dengan form data 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(){
        Auth::guard('admin')->logout(); 
        // auth()->guard('admin')->logout(); 
        return redirect('home'); 
    }
}
