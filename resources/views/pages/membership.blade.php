@extends('layouts.app')

@section('content')
<img src="../asset/join-us.png" alt="" width="100%" height="auto">
<div class="bg-white">
    
    <h1 class="text-center p-3 bg-orange">MEMBERSHIP</h1>
    <br>
<div class="column d-flex justify-content-center">
    <div class="col-sm-3 text-center bg-dark text-light m-3 rounded p-3 card">
        <h2 class="card-title">BASIC</h2>
        <div class="card-body bg-light text-dark">
            <h2>Rp 49.999</h2>
            <small>/month</small>
            <h5>Package includes:</h5>
            <small>1x Rp 20.000 Coupons</small><br>
            <small>3x Rp 10.000 Coupons</small><br>
            <small>5x Rp  5.000 Coupons</small><br><br>
            <h5 class="text-danger">Package excludes:</h5>
            <small>Additional purchases that might be made inside the seminar / workshop</small><br>
            <small class="text-primary">(Coupons can be used for paid seminars and workshops)</small><br>
            <form method="POST" action="{{route('buymembershipBasic', Auth::user()->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="btn btn-dark p-2 m-2">
                    {{-- <a class="text-white" href="{{route('buymembershipBasic', Auth::user()->id)}}">JOIN NOW</a> --}}
                    <button type="submit" class="btn btn-dark">
                        {{ __('Join Now') }}
                    </button>
                </div>
            </form>    
        </div>
    </div>
    
    <div class="col-sm-3 text-center text-dark bg-orange m-3 rounded p-3 card">
        <h2 class="card-title">PREMIUM</h2>
        <div class="card-body bg-light text-dark">
            <h2>Rp 99.999</h2>
            <small>/month</small>
            <h5>Package includes:</h5>
            <small>3x Rp 20.000 Coupons</small><br>
            <small>5x Rp 10.000 Coupons</small><br>
            <small>10x Rp 5.000 Coupons</small><br><br>
            <h5 class="text-danger">Package excludes:</h5>
            <small>Additional purchases that might be made inside the seminar / workshop</small><br>
            <small class="text-primary">(Coupons can be used for paid seminars and workshops)</small><br>
            <form method="POST" action="{{route('buymembershipPremium', Auth::user()->id)}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="btn btn-dark p-2 m-2">
                    {{-- <a class="text-white" href="{{route('buymembershipPremium', Auth::user()->id)}}">JOIN NOW</a> --}}
                    <button type="submit" class="btn btn-dark">
                        {{ __('Join Now') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


@endsection
