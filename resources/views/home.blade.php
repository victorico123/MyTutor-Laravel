@extends('layouts.app')

@section('content')
@if ( Session::has('success') )
<div class="alert alert-success" style="width:100%; z-index: 100;">
                        <strong>Subject successfully registered!</strong>
                    </div>
@endif
<div class="container">
    <div class="container"> 
        <a href="{{url('/add-subject')}}" class="btn btn-warning ">Add Subject</a>
    </div>
<hr style="background-color: white; height: 2px; border: 0;">
    <div class="container">
        <div class="row gy-4">

            @foreach ($items as $data)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ $data->title }}
                        </h3>
                        <p class="card-text">
                            {{ $data->description}}
                        </p>

                        <div style="display:flex; width:100%; flex-wrap: wrap;">
                            <div class="text-muted" style="margin-right:30px;"><b>Price : </b>
                                RM {{ $data->price}}
                            </div>
                            <p class="text-muted"><b>Subject Sessions :</b>
                                {{ $data->learning_hour}} hourr
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>

</div>
<br>


@endsection