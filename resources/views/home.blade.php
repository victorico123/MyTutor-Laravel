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

            @forelse ($items as $data)
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
                                {{ $data->learning_hour}} hour
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            @empty
            <div style="width:800px; height: 200px; line-height: 200px; position: absolute; top: 50%; margin-top:-100px;left: 50%; margin-left:-400px;font-weight: bold;font-size: 100px;text-transform: uppercase; color: #ccc; text-align:center;">
                <h1>empty</h1>
                <h4>No subject registered yet</h4>
            </div>
            @endforelse
        </div>
    </div>

</div>
<br>


@endsection