@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to mu posts</a>
            <a href="" class="btn btn-warning align-items-center"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                     
            <img src="https://picsum.photos/1200/400/?{{ $post->category->name }}" class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">
         
            <article class="my-3 fs-5">
                
                {!! $post->body !!}

            </article>

            <a href="/posts" class="d-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>

@endsection