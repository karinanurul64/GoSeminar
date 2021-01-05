@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($seminars as $seminar)
            <div class="col-md-3">
                <div class="card my-4 p-2">
                    <div class="text-center">
                        <img class="card-img-top" src="{{ asset("asset/$seminar->SeminarPhoto") }}" alt="">
                        <div class="card-body">
                            <h6 class="card-title text-center font-weight-bold">{{ $seminar->SeminarName }}</h6>
                            <p class="card-text text-center">Rp. {{$seminar->Price}}</p>
                            <div class="text-center">
                                <a href="/detail/{{$seminar->id}}" class="btn btn-secondary btn-lg btn-block">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection