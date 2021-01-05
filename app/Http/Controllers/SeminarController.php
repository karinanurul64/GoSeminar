<?php

namespace App\Http\Controllers;

use App\Category;
use App\EnrolledSeminar;
use App\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function participant($id)
    {
        $seminar = Seminar::find($id); 
        $user = Auth::user()->id; 

        if($user!=$seminar->UserId){
            return redirect()->back()->with('error', 'UnauthorizedPage'); 
        }

        $participants = EnrolledSeminar::where('SeminarId','=',$id)->get(); 

        // $iwanttoreturn = [
        //     ['participants',$participants],
        //     ['seminar', $seminar],
        // ]; 

        return view('seminar.participant')->with('participants', $participants)->with('seminar', $seminar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('seminar/create')->with('categories', $categories);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newImage = $request->file('SeminarPhoto');
        $path = 'asset/';
        $newImage->move($path, $request->SeminarPhoto->getClientOriginalName());

        DB::table('seminars')->insert([
            'SeminarName' => $request->name,
            'CategoryId' => $request->category,
            'UserId' => Auth::user()->id,
            'Organizer' => $request->organizer,
            'SeminarDate' => $request->SeminarDate,
            'SeminarLocation' => $request->SeminarLocation,
            'Price' => $request->Price,
            'Description' => $request->SeminarDesc,
            'SeminarPhoto' => $request->SeminarPhoto->getClientOriginalName()
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRegisteredSeminarList($id)
    {
        $user = Auth::user()->id; 
        if($id!=$user){
            return redirect()->back()->with('error', 'Unauthorized page'); 
        }

        $seminars = Seminar::where('UserId','=',$id)->get(); 

        return view('seminar.RegisteredSeminarList')->with('seminars', $seminars);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function category($id){
        $date = now(); 
        $seminars = Seminar::orderBy('SeminarDate', 'ASC')->where([
            ['CategoryId',$id], 
            ['Status','=','Approved'], 
            ['SeminarDate','>',$date], 
        ])->get();
        return view('seminar.category')->with('seminars',$seminars);
    }

    public function detail($id)
    {
        $seminars = Seminar::find($id);
        if($seminars->Status=='Unapproved'){
            if($seminars->User->id == Auth::user()->id){
                return view('seminar.detail')->with('seminars', $seminars);
            }
            if(!Auth::guard('admin')->check()){
                return redirect()->back()->with('error', 'Seminar Unavailable');
            }else{
                return view('seminar.detail')->with('seminars', $seminars);
            }
            
        }else{
            if($seminars->SeminarDate<now()){
                return redirect()->back()->with('error', 'Seminar Unavailable');
            }
            return view('seminar.detail')->with('seminars', $seminars);
        }
        
    }

}
