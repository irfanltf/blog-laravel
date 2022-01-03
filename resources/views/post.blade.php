@extends('layouts.main')
@section('container')

<h1 class="mb-2 text-center">{{$title}}</h1>


<div class="row mb-5 justify-content-center">
    <div class="col-md-6">
        <form action="/blog" method="get">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category')}}">

            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author')}}">
            @endif
            <div class="input-group mb-3">
                <input value="{{ request('cari')}}" type="text" name="cari" class="form-control" placeholder="Cari" aria-label="Cari" aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>

    </div>
</div>

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
                By. <a href="/blog?author={{$posts[0]->author->username}}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{$posts[0]->category->slug}}" class="text-decoration-none">{{ $posts[0]->category->nama }}</a> {{ $posts[0]->created_at->diffForHumans()}}
            </small></p>
        <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn-primary btn">
            Read more
        </a>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">

                <div class="kotak">
                    <div class="img-hover-zoom--blur">
                        <div class="position-absolute px-3 py-2 text-light category">
                            <a href="/blog?category={{$post->category->slug}}" class="text-decoration-none text-light"> {{ $post->category->nama }}</a>
                        </div>
                        <img src="https://source.unsplash.com/500x400/?{{ $post->category->nama}}" class="card-img-top" alt="...">
                    </div>

                </div>
                <div class="card-body">
                    <h4 class="card-title">{{$post->judul}}</h4>
                    <p class="card-text">{{$post->readmore}}</p>
                    <p><small>By. <a href="/blog?author={{$post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $posts[0]->created_at->diffForHumans()}}</small></p>
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary"> Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">tidak ada postingan</p>
@endif
<div class="d-flex justify-content-center">
    {{$posts->links()}}
</div>


@endsection