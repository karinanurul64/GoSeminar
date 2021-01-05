<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seminar; 

class AdminsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //middleware untuk admin
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //halaman awal setelah login
    public function index()
    {
        $seminars = Seminar::where('Status','=','Unapproved')->get(); 

        return view('pages/admindashboard')->with('seminars',$seminars); 
    }

    public function approveSeminar($id){
        $seminar = Seminar::find($id); 

        $seminar->Status = 'Approved'; 
        $seminar->save(); 

        return redirect('admin/dashboard'); 
    }
}
