@extends('layouts/app')

@section('content')
 <h2 class="m-3 text-center">Registered Seminar List</h2>   

 @foreach ($seminars as $seminar)
     <div class="bg-dark p-3 text-white m-4 row">
        <div class="column">
            <h5><a class="text-white" href="/detail/{{$seminar->id}}">{{$seminar->SeminarName}}</a></h5>
        @if ($seminar->Status == 'Approved')
            <h6 class="text-success">Status : {{$seminar->Status}}</h6>
        @else
            <h6 class="text-danger">Status : {{$seminar->Status}}</h6>
            @if($seminar->RejectMessage!=null)
            <h6 class="text-danger">Message from Admin : {{$seminar->RejectMessage}}</h6>
            @endif
        @endif
        </div>

        <div class="ml-5">
            <button class="btn btn-light p-2 m-2"><a class="text-decoration-none" href="/participant/{{$seminar->id}}"> Participant List</a></button>
        </div>
        
     </div>

 @endforeach
@endsection
