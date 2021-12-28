@extends('layouts.main')
@section('container')

<h1 class="mb-5">{{$title}}</h1>
@if($posts->count() > 0)

<div class="card mb-3 text-center">
    <div class="kotak">
        <div class="img-hover-zoom--blur">
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->nama}}" class="card-img-top" alt="...">
        </div>
        </div>
        <div class="card-body">
            <h4 class="card-title "> <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->judul}} </a></h4>

            <p class="card-text">{{$posts[0]->readmore}}</p>
            <p class="card-text"><small class="text-muted">
                    By. <a href="/author/{{$posts[0]->author->username}}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none">{{ $posts[0]->category->nama }}</a> {{ $posts[0]->created_at->diffForHumans()}}
                </small></p>
            <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn-primary btn">
                Read more
            </a>
        </div>
    </div>
    @else
    <p class="text-center fs-4">tidak ada postingan</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">

                    <div class="kotak">
                        <div class="img-hover-zoom--blur">
                            <div class="position-absolute px-3 py-2 text-light category">
                                <a href="/categories/{{$post->category->slug}}" class="text-decoration-none text-light"> {{ $post->category->nama }}</a> 
                            </div>
                            <img src="https://source.unsplash.com/500x400/?{{ $post->category->nama}}" class="card-img-top" alt="...">
                        </div>

                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$post->judul}}</h4>
                        <p class="card-text">{{$post->readmore}}</p>
                        <p><small>By. <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $posts[0]->created_at->diffForHumans()}}</small></p>
                        <a href="/blog/{{ $post->slug }}" class="btn btn-primary"> Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>




    @endsection