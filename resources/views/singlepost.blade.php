@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2>{{$post->judul}}</h2>
            <p>By. <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->slug}}">{{ $post->category->nama }}</a></p>
<div class="kotak">
        <div class="img-hover-zoom--blur">
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama}}" class="card-img-top img-fluid" alt="...">
 </div>
        </div>
            <article class="my-3 fs-4">

                {!! $post->body !!}
            </article>


            <a href="/blog" class="d-block mt-3">Back To Posts</a>
        </div>
    </div>
</div>


@endsection