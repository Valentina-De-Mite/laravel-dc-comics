@extends('layouts.app')

@section('content')

<div class="p-5 mb-4 bg-dark text-white rounded-0">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">{{$comic->title}}</h1>
        <p>
           {{$comic->description}}
        </p>
    </div>
</div>

<div class="container d-flex gap-2">

    <img width="600" class="img-fluid shadow-lg" src="{{$comic->thumb}}" alt="">

    <div class="text">
        <strong class="text-muted">Description</strong>
        <div class="display-3"> {{$comic->price}}</div>
        <div class="display-3"> {{$comic->series}}</div>
        <div class="display-3"> {{$comic->artists}}</div>
        <div class="display-3"> {{$comic->writers}}</div>

        <a class="btn btn-success mt-4" href="#" role="button">Buy Now</a>
    </div>




</div>

@endsection