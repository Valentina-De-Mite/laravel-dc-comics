@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Edit you're comic here</h1>
    <form action="{{ route('comics.update', $comic) }}" method="post" class="card p-3">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Es Batman 3"
                aria-describedby="titleHlper" required value="{{ $comic->title }}">
            <small id="titleHlper" class="text-muted">Add the ComicBook title here</small>
        </div>
        <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
             <input type="file" class="form-control" name="thumb" id="thumb" placeholder="select a file"
                        aria-describedby="fileHelpImg">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea rows="6" type="text" class="form-control" name="description" id="description" aria-describedby="helpId"
                        placeholder="insert description" value=""> {{ $comic->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                        placeholder="insert price" value=" {{ $comic->price }}">
        </div>


        <div class="justify-content-center d-flex my-4"><button class="bg-primary text-light border-0 rounded py-2 px-3 fs-5" type="submit">Submit</button></div>
    </form>
</div>

@endsection