@extends('layouts.register_login_template')

@section('content')
<div class="container" style="width: 50%;">
    <h5 style="color:blue">SIGN IN</h5>
    <p class="left">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="EmailInput" class="text-left">Email address <span style="color: red;">*</span></label>
            <div>
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="PasswordInput">Password <span style="color: red;">*</span></label>
            <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    </p>

</div>
@endsection