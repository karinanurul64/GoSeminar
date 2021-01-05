@extends('layouts.app')

@section('content')
<div class="bg-orange text-white text-center p-3">
    <h3>Hello, {{Auth::user()->name}}</h3>
    <h5>Your credit balance : Rp {{Auth::user()->CreditBal}},00</h5>
    
    @if (Auth::user()->membership==null)
        <button class="btn btn-outline-dark btn-dark"> <a class="text-white text-decoration-none" href="/membership"> Join Membership </a></button>
    @else
        <h5>Membership : {{Auth::user()->membership}}</h5> 
        <h6>Membership will exipre at {{Auth::user()->membershipExpiryDate}}</h6> 
        {{-- cancel memberhsip --}}
        <form method="POST" action="{{route('cancelMembership',Auth::user()->id)}}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <button type="submit" class="btn btn-outline-dark btn-danger text-white m-2">
                {{ __('Cancel Membership') }}
            </button>
        </form>
    @endif
    <button class="btn btn-outline-dark btn-dark text-white"> <a href="/edit/{{Auth::user()->id}}">Edit Profile</a></button>
    <button class="btn btn-outline-dark btn-dark"> <a class="text-white text-decoration-none" href="/topup"> TopUp Credit Balance </a></button>
</div>

<div class="row">
    {{-- untuk upcoming seminar --}}
    <div class="bg-dark  p-3" style="width: 50%">
        <h4 class="text-center text-white">Upcoming Seminar</h4>
        @foreach ($enrolledSeminars as $es)
            @if ($es->Seminars->SeminarDate>now())
                <div class="text-dark card m-2 p-2">
                    Seminar Name : {{$es->Seminars->SeminarName}} <br>
                    Seminar Date : {{$es->Seminars->SeminarDate}}
                </div>  
                
            @endif    
        @endforeach
    </div>
    {{-- untuk done seminar --}}
    <div class="bg-dark p-3" style="width: 50%">
        <h4 class="text-center text-white">Done Seminar</h4>
        @foreach ($enrolledSeminars as $es)
            @if ($es->Seminars->SeminarDate<now())
                <div class="text-dark card m-2 p-2">
                    Seminar Name : {{$es->Seminars->SeminarName}} <br>
                    Seminar Date : {{$es->Seminars->SeminarDate}}
                </div>  
                
            @endif    
        @endforeach
    </div>
</div>
@endsection