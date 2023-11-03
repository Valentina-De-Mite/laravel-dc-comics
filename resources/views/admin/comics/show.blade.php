@extends('layouts.app')

@section('content')

<div class="jumbotron-tot">
    <div class=" p-5  bg-dark text-white rounded-0">
        <div class="container ">
            <h2 class=" fw-bold mb-3">{{$comic->title}}</h2>
            <p class="mt-4 fs-4">
            {{$comic->description}}
            </p>
            <p class="fs-5 mb-3">Artist: {{$comic->artists}};</p>
            <p class="fs-5">Writers: {{$comic->writers}};</p>
        </div>
    </div>
<div class="jumbotron-tot py-5">
    <div class="container d-flex  ">

    <div class="col-7">

    <img width="w-75" class="img-fluid shadow rounded" src="{{$comic->thumb}}" alt="">
</div>
    
    <div class="d-flex col-4">
        <div class="description align-self-center  bg-dark-subtle p-5 rounded-2">
            <strong class="text-muted fs-2">Description:</strong>
            <div class="fs-5"> Price: {{$comic->price}};</div>
            <div class="fs-5">Series: {{$comic->series}};</div>
            

            <a class="btn btn-success mt-4 p-2 big m-auto" href="#" role="button">Buy Now</a>
        </div>
    </div>
</div>





@endsection