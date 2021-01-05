@extends('layouts/app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-orange text-white text-center">{{ __('Register Your Seminar & Workshop') }}</div>
                <div class="card-body">
                    <form action="{{ route('seminar.store') }}" method="POST" enctype = "multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Seminar Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Seminar Category') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="category">
                                    @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->CategoryName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="organizer" class="col-md-4 col-form-label text-md-right">{{ __('Your Organization Name') }}</label>

                            <div class="col-md-6">
                                <input id="organizer" type="text" class="form-control @error('organizer') is-invalid @enderror" name="organizer" value="{{ old('organizer') }}" required autocomplete="organizer" autofocus>

                                @error('organizer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeminarDate" class="col-md-4 col-form-label text-md-right">{{ __('Seminar Date and Time') }}</label>

                            <div class="col-md-6">
                                <input id="SeminarDate" type="datetime-local" class="form-control @error('SeminarDate') is-invalid @enderror" name="SeminarDate" value="{{ old('SeminarDate') }}" required autocomplete="SeminarDate" autofocus>

                                @error('SeminarDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="organizer" class="col-md-4 col-form-label text-md-right">{{ __('Seminar Location') }}</label>

                            <div class="col-md-6">
                                <input id="SeminarLocation" type="text" class="form-control @error('SeminarLocation') is-invalid @enderror" name="SeminarLocation" value="{{ old('SeminarLocation') }}" required autocomplete="SeminarLocation" autofocus>

                                @error('SeminarLocation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="Price" type="number" class="form-control @error('Price') is-invalid @enderror" name="Price" value="{{ old('Price') }}" required autocomplete="Price" autofocus>

                                @error('Price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeminarDesc" class="col-md-4 col-form-label text-md-right">{{ __('Seminar Description') }}</label>

                            <div class="col-md-6">
                                <input id="SeminarDesc" type="textarea" class="form-control @error('SeminarDesc') is-invalid @enderror" name="SeminarDesc" value="{{ old('SeminarDesc') }}" required autocomplete="SeminarDesc" autofocus>
                                
                                @error('SeminarDesc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeminarPhoto" class="col-md-4 col-form-label text-md-right">{{ __('Seminar Image') }}</label>
                            <div class="col-md-6">
                                <input type="file" name="SeminarPhoto" class="form-control-file" id="exampleFormControlFile1" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Submit Request') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection