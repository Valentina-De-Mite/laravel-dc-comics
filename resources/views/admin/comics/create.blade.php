@extends('layouts_app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Add a new Comic</h1>
    <form  method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Es Batman 3"
                aria-describedby="titleHlper" required>
            <small id="titleHlper" class="text-muted">Add the ComicBook title here, min 10 characters, max 100
                characters</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Comic Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Es Batman 3"
                aria-describedby="thumbHlper">
            <small id="thumbHlper" class="text-muted">Add the ComicBook src here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{'description'}}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <textarea class="form-control" name="price" id="price" rows="4">{{'price'}}</textarea>
        </div>


        <div class="justify-content-center d-flex my-4"><button class="bg-primary text-light border-0 rounded py-2 px-3 fs-5" type="submit">Save</button></div>
    </form>
</div>

@endsection