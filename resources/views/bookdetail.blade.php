@extends('layouts/master')
@section('content')

<div class="container bg-secondary fs-2 text-white">
    Book Detail
</div>

<div class="container d-flex justify-content-center">
    <div class="card mt-3" style="width: 100vh;">
        <img src="{{$book->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-text mt-3">Title : {{ $book->book_title }}</h5>
            <h5 class="card-text mt-3">Author : {{ $book->book_author }} </h5>
            <h5 class="card-text mt-3">Publisher : {{ $publisher->publisher_name }} </h5>
            <h5 class="card-text mt-3">Year : {{ $book->year }} </h5>
            <h5 class="card-text mt-3">Synopsis : <br> {{ $book->synopsis }} </h5>
        </div>
    </div>
</div>

@endsection