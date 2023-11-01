@extends('layouts_app')

@section('content')



<?php

// dd ($comics)


?>
<div class="jumbotron py-5"></div>


<div class="black">
   <div class="container series py-5 text-center">
       <div class="blue popup py-1 px-3 fw-medium text-center text-light fs-4">
            CURRENT SERIES
        </div>
            <div class="row-cols-sm-6 row">
                @foreach($comics as $comic)

                <div class="col-2">
                <div class=" text-center">
                    <img class="w-75" src="{{$comic['thumb']}}" alt="">
                    <div class="card-body text-white ms-2 fs-6 text-decoration-none link">
                        {{$comic['title']}}
                    </div>
                </div>
            </div>

                @endforeach
            </div>

            <button class="btn btn-primary py-2 px-5 fs-5 mt-4 fw-medium">
                LOAD MORE
            </button>
    </div>
                

    
  
    </div>
  </div>               
</div>
    



@endsection