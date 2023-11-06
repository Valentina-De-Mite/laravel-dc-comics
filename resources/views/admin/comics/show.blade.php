@extends('layouts.app')

@section('content')

<div class="bg-dark p-5">
    <div class="  text-white rounded-0 container mt-4 ">
        <div class=" d-flex justify-content-center g-4">
            <div class="col-4">
                 <img width="400px" class="img-fluid shadow rounded " src="{{$comic->thumb}}" alt="">

            </div>
               
            <div class="col-6>
                <p class="">Description:</p>
                 <h2 class=" fw-bold mb-3">{{$comic->title}}</h2>
                    <p class=" fs-4">
                    {{$comic->description}}
                    <p class="fs-5 mb-3">Artist: {{$comic->artists}};</p>
                    <p class="fs-5">Writers: {{$comic->writers}};</p>
                    <p class="fs-5"> Price: {{$comic->price}};</p>
                    <p class="fs-5"> Series: {{$comic->series}};</p>

                    <a class="btn btn-success mt-4 p-3 fs-5 big m-auto" href="#" role="button">Buy Now</a>
            </div>
                
            
        </div>
        
    </div>
 




@endsection