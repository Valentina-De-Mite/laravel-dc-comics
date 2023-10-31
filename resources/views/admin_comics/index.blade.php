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
                    <th>Name</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @forelse($comics_list as $comic)

                <tr class="">
                    <td class=""><img src="{{$comic->thumb}}" alt=""></td>
                    <td scope="row">{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->artists}}</td>
                    <td>{{$comic->writers}}</td>

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