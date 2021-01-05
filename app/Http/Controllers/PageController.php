<?php

namespace App\Http\Controllers;
use App\Category;
use App\EnrolledSeminar;
use App\Seminar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class PageController extends Controller
{
    
    public function about()
    {
        return view('pages/about');
    }

    public function index()
    {   
        $categories = Category::all(); 
        return view('pages/home')->with('categories', $categories);
    }

    public function membership(){
        return view('pages/membership'); 
    }

    public function myaccount(){
        $user = Auth::user(); 
        $enrolledSeminars = EnrolledSeminar::where('UserId','=', $user->id)->get(); 

        return view('pages/myaccount')->with('enrolledSeminars', $enrolledSeminars); 
    }

    public function topupform(){
        return view('pages/topup');
    }

    public function topupbalance(request $request, $id){
        $user = User::find($id); 
        $user->CreditBal = $request->CreditBal+$user->CreditBal; 
        $user->save(); 
        return redirect('myaccount'); 
    }

    public function enrollSeminar($id){
        //cari dia udah enroll seminar ini atau belum 
        $seminar = Seminar::find($id);
        $user = Auth::user(); 

        $enroll = EnrolledSeminar::where([
            ['SeminarId','=',$id],
            ['UserId','=', $user->id],
        ])->get();
            //kalo belom pernah enroll
        if($enroll->count()==0){
            if($seminar->SeminarDate<now()){
                return redirect()->back()->with('error', 'Seminar Unavailable');
            }
            if($seminar->Price > 0){
                if($user->CreditBal<$seminar->Price){
                    return redirect()->back()->with('error', 'Balance not enough, please top up first');
                }else{
                    $es = new EnrolledSeminar(); 
            
                    $es->UserId = $user->id; 
                
                    $es->SeminarId = $id;
                    
                    $es->save();
    
                    $user->CreditBal = $user->CreditBal - $seminar->Price;
                }
            }
            else{
                $es = new EnrolledSeminar(); 
            
                $es->UserId = $user->id; 
            
                $es->SeminarId = $id;
                
                $es->save();
            }
        } else if($enroll->count()>0){
            return redirect()->back()->with('error','You are already enrolled to this seminar'); 
        }
        
        return redirect('myaccount')->with('success','Seminar successfully enrolled'); 
    }

    public function EditProfile($id){
        if($id!=Auth::user()->id){
            return redirect()->back()->with('error', 'Unauthorized Page');
        }
        $user = User::find($id); 
        return view ('pages/editProfile')->with('user', $user); 
    }

    public function UpdateProfile(Request $request, $id){
        if($id!=Auth::user()->id){
            return redirect()->back()->with('error', 'Unauthorized Page');
        }
        $user = User::find($id); 
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->save();

        return redirect('myaccount')->with('success', 'Update Profile Success'); 
    }


    
}
