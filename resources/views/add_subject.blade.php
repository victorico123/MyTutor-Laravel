@extends('layouts.app')

@section('content')

<div class="parent-landing-card " style="height: 80vh;">
    <div class="card landing-card" style="width: 70%;">
        <h3 class="card-title "><span class="tutor-text text-center">Add New Subject</span></h3>
        <div class="card-body text-dark">
            <div class="container" style="width: 100%;">
                <p class="left">
                <form method="POST" action="{{ url('/add-subject') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="titleInput" class="text-left">Subject Title<span style="color: red;">*</span></label>
                                <div>
                                    <input id="titleInput" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="priceInput" class="text-left">Subject price<span style="color: red;">*</span></label>
                                        <div>
                                            <input id="priceInput" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" autofocus>

                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="hourInput" class="text-left">Learning hour<span style="color: red;">*</span></label>
                                        <div>
                                            <input id="hourInput" type="number" min="0" step="1" class="form-control @error('hour') is-invalid @enderror" name="hour" value="{{ old('hour') }}" autofocus>

                                            @error('hour')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="descriptionInput" class="text-left">Subject Description <span style="color: red;">*</span></label>
                        <div>
                            <textarea id="descriptionInput" type="text" class="form-control @error('description') is-invalid @enderror" name="description" autofocus>{{ old('description') }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection