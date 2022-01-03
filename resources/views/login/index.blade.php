@extends('layouts.main')


@section('container')

<div class="row  justify-content-center mt-5">
    <div class="col-5">

        @if(session()->has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>WIDIH!</strong> berhasil membuat akun baru.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('errorr'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>SORRY!</strong> {{session('errorr')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin">
            <form action="/login" method="POST">
                @csrf
                <div class="text-center">
                    <img class="mb-2" src="/img/logo-teras.png" alt="" width="92" height="92">
                </div>

                <h1 class="h3 mb-3 fw-normal text-center">Silahkan Masuk</h1>

                <div class="form-floating">
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" autofocus value="{{old('email')}}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control @error('email') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>


                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <small class="mt-2 d-block text-center">Belum Punya akun? <a href="/registrasi"> Daftar sekarang!</a></small>

                <p class="mt-5 mb-3 text-muted text-center">&copy; Muhammad Irfan Lutfi <?= date('Y') ?></p>
            </form>
        </main>
    </div>
</div>



@endsection