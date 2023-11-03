@extends('layouts.app')

@section('content')


<div class="banner-tot  p-5 mb-4 bg-dark text-white rounded-0">
    <div class="container-fluid">
        <h1 class="display-5 fw-bold">{{$comic->title}}</h1>
        <p>
           {{$comic->description}}
        </p>
    </div>
</div>

<div class="container d-flex my-5">

    <div class="col-8">

    <img width="w-75" class="img-fluid shadow rounded" src="{{$comic->thumb}}" alt="">
</div>
    
    <div class="d-flex col-4 ">
<div class="description align-self-center">
        <strong class="text-muted fs-2">Description:</strong>
        <div class="fs-5"> Price: {{$comic->price}};</div>
        <div class="fs-5">Series: {{$comic->series}};</div>
        

        <a class="btn btn-success mt-4" href="#" role="button">Buy Now</a>
    </div>
</div>
    




</div>

@endsection