@extends('layouts.main')
@section('container')


<h1 class="mb-5">
    Post Categories
</h1>

<div class="container">
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4">
            <div class="kotak">
                <div class="img-hover-zoom--blur">
                    <a href="/blog?category={{$category->slug}}">
                        <div class="card bg-dark text-white">

                            <img src="https://source.unsplash.com/500x500?{{ $category->nama}}" class="card-img" alt="{{ $category->nama}}">

                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7);">{{$category->nama}}</h5>


                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection