@extends('layouts.app')

@section('content')

<img src="../asset/banner(FINAL).png" alt="" width="100%" height="auto">

<div class="container-sm column d-flex justify-content-center">
    @foreach ($categories as $cat)
    <div class="col-sm-3 bg-dark m-3 p-3 rounded">
        <a href="/category/{{ $cat->id }}"><img src="../asset/{{$cat->CategoryPhoto}}" alt="" width="100%" height="auto">
            </a>  
        <div class="text-center">
        <a class="text-white " href="/category/{{ $cat->id }}">{{$cat->CategoryName}}</a>
        </div>
    </div>
    @endforeach

</div>

@endsection
