@extends('layouts/app')

@section('content')

<h2 class="text-center m-3">Participant List for {{$seminar->SeminarName}}</h2>

<table class="table table-bordered col-lg-12">
    <thead>
        <tr class="text-center">
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">E-mail</th>
        </tr>
      </thead>
      <tbody>
          @php
            $x = 1; 
          @endphp
          @foreach ($participants as $pt)
          <tr>
            <th scope="row">{{$x}}</th>
            <td>{{$pt->Users->name}}</td>
            <td>{{$pt->Users->email}}</td>
          </tr>
         
          @php
            $x++; 
          @endphp
          @endforeach
      </tbody>
</table>
@endsection