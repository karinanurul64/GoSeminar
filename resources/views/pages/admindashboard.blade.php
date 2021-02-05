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
                <p class="card-text text-center">@currency{{$seminar->Price}}</p>
                <div class="text-center">
                    <a href="/detail/{{$seminar->id}}" class="btn btn-secondary btn-lg btn-block">View Detail</a>
                    
                    <form class="form-group" method="POST" action="{{ route('approve', $seminar->id) }}">
                        @csrf
                        <button class="btn btn-success btn-lg btn-block mt-2" type="submit">APPROVE</button>
                    </form>

                        {{-- <a href="/admin/rejectPage/{{$seminar->id}}" class="btn btn-danger btn-lg btn-block mt-2" type="submit">REJECT</a> --}}
                        <button type="button" class="btn btn-danger btn-lg btn-block mt-2" data-toggle="modal" data-target="#myModal">REJECT</button>

                        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Rejection Message</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>Tell them why their event is rejected.</p>
          <form class="form-group" method="POST" action="{{ route('reject', $seminar->id) }}">
            @csrf
            {{-- <input type="textarea" name="RejectMessage" id=""> --}}
            <div class="form-group row">
                <div class="col-md-12">
                    <input id="RejectMessage" type="textarea" class="form-control @error('RejectMessage') is-invalid @enderror" name="RejectMessage" value="{{ old('RejectMessage') }}" required autocomplete="RejectMessage" autofocus>
                    
                    @error('RejectMessage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-danger btn-lg btn-block mt-2" type="submit">REJECT</button>
        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
@endsection
