@extends('layouts/master')
@section('content')
<div class="container bg-secondary fs-2 text-white">
    Publisher List
</div>

<div class="row mt-3 d-flex justify-content-center">
    @foreach($publisher as $cp)
    <div class="col mt-5">
        <div class="card" style="width: 18rem;">
            <img src="{{$cp->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $cp->publisher_name }}</h5>
                <p class="card-text">by <br> {{ $cp->address }} </p>
                <a href="/publisher/{{$cp->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection