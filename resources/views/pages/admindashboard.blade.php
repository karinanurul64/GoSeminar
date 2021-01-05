@extends('layouts.app')

@section('content')
@if ($seminars->count()==0)
    <h2 class="m-5">There isn't any new requests yet</h2>
@else
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
                    
                    <form class="form-group" method="POST" action="{{ route('approve', $seminar->id) }}">
                        @csrf
                        <button class="btn btn-success btn-lg btn-block mt-2" type="submit">APPROVE</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
@endsection