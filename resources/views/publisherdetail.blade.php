@extends('layouts/master')
@section('content')

<div class="container bg-secondary fs-2 text-white">
    <h3>{{ $pub_card->publisher_name }}</h3>
    <h3>Address - {{ $pub_card->address }}</h3>
    <h3>Phone - {{ $pub_card->phone_number }}</h3>
    <h3>Email - {{ $pub_card->email }}</h3>
</div>

<div class="row mt-3 d-flex justify-content-center">
    @foreach($book_card as $c)
    <div class="col mt-5">
        <div class="card" style="width: 18rem;">
            <img src="{{$c->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $c->book_title }}</h5>
                <p class="card-text">by <br> {{ $c->book_author }} </p>
                <a href="/detail/{{$c->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection