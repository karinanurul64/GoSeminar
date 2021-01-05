@extends('layouts.app')

@section('content')
<h3 class="text-center text-white p-3 bg-orange">Top Up Balance</h3>
<div class="card-body">
<form method="POST" action="{{ route('topupbalance', Auth::user()->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group row">
        <label for="CreditBal" class="col-md-4 col-form-label text-md-right">{{ __('Top Up Balance') }}</label>

        <div class="col-md-6">
            <input id="CreditBal" type="number" class="form-control @error('CreditBal') is-invalid @enderror" name="CreditBal" value="{{ old('CreditBal') }}" required autocomplete="CreditBal" autofocus>

            @error('CreditBal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-dark">
                {{ __('Top Up') }}
            </button>
        </div>
    </div>
</form>   
</div> 
@endsection