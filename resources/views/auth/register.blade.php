@extends('layouts.register_login_template')

@section('content')

<div class="container">
    <h5 style="color:blue">SIGN UP</h5>
    <p class="left">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="name" class="text-left">Full Name <span style="color: red;">*</span></label>
                    <div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="emailInput" class="text-left">Email Address <span style="color: red;">*</span></label>
                    <div>
                        <input id="emailInput" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="passwordInput">Password <span style="color: red;">*</span></label>
                    <div>
                        <input id="passwordInput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="phoneInput" class="text-left">Phone Number <span style="color: red;">*</span></label>
                    <div>
                        <input id="phoneInput" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autofocus>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="addressInput" class="text-left">Mailing Address <span style="color: red;">*</span></label>
                    <div>
                        <textarea id="addressInput" type="text" class="form-control @error('address') is-invalid @enderror" name="address" autofocus>{{ old('address') }}</textarea>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="state" class="text-left">State <span style="color: red;">*</span></label></label>
                    <div class="col-sm-10">
                        <select class="form-control form-select" id="state" name="state">
                            <option value="0" {{ (old("state") == "") ? "selected":"" }}>N/A</option>
                            <option value="Johor" {{ (old("state") == "Johor") ? "selected":"" }}>Johor</option>
                            <option value="Kedah" {{ (old("state") == "Kedah") ? "selected":"" }}>Kedah</option>
                            <option value="Kelantan" {{ (old("state") == "Kelantan") ? "selected":"" }}>Kelantan</option>
                            <option value="Kuala Lumpur" {{ (old("state") == "Kuala Lumpur") ? "selected":"" }}>Kuala Lumpur</option>
                            <option value="Labuan" {{ (old("state") == "Labuan") ? "selected":"" }}>Labuan</option>
                            <option value="Malacca" {{ (old("state") == "Malacca") ? "selected":"" }}>Malacca</option>
                            <option value="Negeri Sembilan" {{ (old("state") == "Negeri Sembilan") ? "selected":"" }}>Negeri Sembilan</option>
                            <option value="Pahang" {{ (old("state") == "Pahang") ? "selected":"" }}>Pahang</option>
                            <option value="Perak" {{ (old("state") == "Perak") ? "selected":"" }}>Perak</option>
                            <option value="Perlis" {{ (old("state") == "Perlis") ? "selected":"" }}>Perlis</option>
                            <option value="Penang" {{ (old("state") == "Penang") ? "selected":"" }}>Penang</option>
                            <option value="Sabah" {{ (old("state") == "Sabah") ? "selected":"" }}>Sabah</option>
                            <option value="Sarawak" {{ (old("state") == "Sarawak") ? "selected":"" }}>Sarawak</option>
                            <option value="Selangor" {{ (old("state") == "Selangor") ? "selected":"" }}>Selangor</option>
                            <option value="Terengganu" {{ (old("state") == "Terengganu") ? "selected":"" }}>Terengganu</option>
                        </select>
                    </div>
                    @error('state')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </p>
    @endsection