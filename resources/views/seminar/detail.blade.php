@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-4">
                <img class="card-img-top" src="{{ asset("asset/$seminars->SeminarPhoto")}}" alt="">
            </div>

            <div class="col-md-7 pt-3 ml-5">
                <h2 class="font-weight-bold text-dark">{{$seminars->SeminarName}}</h2>
                <p class="text-dark">@currency($seminars->Price)</p>
                <p class="text-dark text-justify mr-4">{{$seminars->Description}}</p>
                <p class="text-dark text-justify mr-4">Date: {{$seminars->SeminarDate}}</p>
                <p class="text-dark text-justify mr-4">Location: {{$seminars->SeminarLocation}}</p>

                @guest
                @if (!Auth::guard('admin')->check())
                <form class="form-group" method="" action="/login">
                    @csrf
                    <div class="form-group row mt-3">
                        <div class="col-md-6">
                            <button class="btn btn-dark" type="submit">ENROLL</button>
                        </div>
                    </div>
                </form>
                @endif
                @endguest

                @can('IsUser')
                <form class="form-group" method="GET" action="{{ route('enroll.seminar', $seminars->id) }}">
                    @csrf
                    <div class="form-group row mt-3">
                        <div class="col-md-6">
                            <button class="btn btn-dark" type="submit">ENROLL</button>
                        </div>
                    </div>
                </form>
                @endcan
            </div>
        </div>
    </div>
@endsection
                
