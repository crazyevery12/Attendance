@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius: 20px">
                <div class="card-header"><h1 style="color : #35c2de">Edit Information</h1></div>
                @if (session('message'))
                <div class="alert alert-{{ session('level') }}" role="alert">
                    <strong>{{session('message')}}</strong>
                </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('user.update') }}">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right" for="first_name">First name</label>
                            <div class="col-md-4">
                                <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ $user->first_name }}" required autofocus>
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    
                        
                            
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right" for="last_name">Last name</label>
                            <div class="col-md-4">
                                <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ $user->last_name }}" required autofocus>
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right" for="birthday">Birthday</label>
                            <div class="col-md-4">
                                <input class="form-control" id="birthday" type="date" name="birthday" value="{{ $user->birthday }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right" for="gender">Gender</label>
                            <div class="col-md-4">
                                <label class="radio-container m-r-45">Male
                                    <input type="radio" value="1" name="gender" {{$user->gender == 1 ? 'checked' : ''}}>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="0" {{$user->gender == 0 ? 'checked' : ''}}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right" for="position">Position</label>
                            <div class="col-md-4">
                                <label class="radio-container m-r-45">Teacher
                                    <input type="radio" value="1" name="position" {{$user->position == 1 ? 'checked' : ''}}>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Student
                                    <input type="radio" name="position" value="0" {{$user->position == 0 ? 'checked' : ''}}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    SAVE
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
