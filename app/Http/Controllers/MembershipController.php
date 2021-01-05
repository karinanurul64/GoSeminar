<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth; 

class MembershipController extends Controller
{
    public function membershipBuyBasic($id){
        
        $user = User::find($id); 
        if($user->role!='user'){
            return redirect('/')->with('error', 'Unauthorized Page'); 
        }
        if($user->CreditBal<49999){
            return redirect('myaccount')->with('error','Balance Not Enough, please topup first'); 
        }
        else{
            $user->membership = 'Basic'; 
            $user->membershipExpiryDate = date("d-m-Y", strtotime("+1 months"));
            $user->CreditBal = $user->CreditBal-49999; 
            $user->save(); 
            return redirect('myaccount'); 
        }
        
    }

    public function membershipBuyPremium($id){
        $user = User::find($id); 
        if($user->role!='user'){
            return redirect('/')->with('error', 'Unauthorized Page'); 
        }
        
        if($user->CreditBal<99999){
            return redirect('myaccount')->with('error','Balance Not Enough, please topup first'); 
        }
        else{
        $user->membership = 'Premium'; 
        $user->membershipExpiryDate = date("d-m-Y", strtotime("+1 months"));
        $user->CreditBal = $user->CreditBal-99999; 
        $user->save(); 
        return redirect('myaccount'); 
        }
    }

    public function cancelMembership($id){
        $user = User::find($id); 

        if($user->role!='user'){
            return redirect('/')->with('error', 'Unauthorized Page'); 
        }

        if($user->id!=Auth::user()->id){
            return redirect('/')->with('error', 'Unauthorized Page'); 
        }
        
        $user->membership = null; 
        $user->membershipExpiryDate = null;
        $user->save(); 
        return redirect('myaccount'); 
    }
}
