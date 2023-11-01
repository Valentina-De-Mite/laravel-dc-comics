@extends('layouts_app')

@section('content')



<div class="container">
    <div class="table-responsive">
        <table class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
            <thead class="table-light">

                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sale Date</th>
                    <th>Artists</th>
                    <th>Writers</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @forelse($comics_list as $comic)

                <tr class="">
                    <td class=""><img class="img-fluid" src="{{$comic->thumb}}" alt=""></td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->artists}}</td>
                    <td>{{$comic->writers}}</td>
                    <td class="text-white"><button class="px-3 py-1 rounded bg-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-eye text-white" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></button></td>

                </tr>


                @empty
                <tr>
                    <td>
                        <p>
                            No products in the store yet!
                        </p>
                        ì
                    </td>
                </tr>


                @endforelse

            </tbody>

        </table>
    </div>
</div>



@endsection