@extends('layouts.main')


@section('container')

<div class="row  justify-content-center mt-5">
    <div class="col-xs-12 col-md-8 col-lg-5">

        <main class="form-registration">
            <form action="/registrasi" method="post">
                @csrf
                <div class="text-center">
                    <img class="mb-2" src="/img/logo-teras.png" alt="" width="92" height="92">
                </div>

                <h1 class="h3 mb-3 fw-normal text-center">Silahkan Daftar</h1>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name@example.com" value="{{old('name')}}">
                    <label for="nama">Nama</label>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="name@example.com" value="{{old('username')}}">
                    <label for=" username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">
                    <label for=" floatingInput">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
                    <label for=" password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message}}
                    </div>
                    @enderror
                </div>


                <button class="mt-2 w-100 btn btn-lg btn-primary" type="submit">Registrasi</button>
                <small class="mt-2 d-block text-center">Sudah Punya akun? <a href="/login"> Silahkan Masuk!</a></small>

                <p class="mt-5 mb-3 text-muted text-center">&copy; Muhammad Irfan Lutfi <?= date('Y') ?></p>
            </form>
        </main>
    </div>
</div>



@endsection