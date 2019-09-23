@extends('layouts.app')

@section('content')

    <div class="row justify-content-md-center">
        <div class="col-md-5 text-center">
            <h5 class="mt-3">Silahkan Masuk Ke Akun Anda</h5>
        </div>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row justify-content-md-center mt-4">
            <div class="col-md-5 col">
                <p class="">Belum Punya Akun ? <a href="{{ route('register') }}" class="text-warning">Daftar Di sini</a> </p>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Email"  autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="current-password" >

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleCheck1">TetapMasuk</label>
                        </div>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('password.request') }}" class="text-warning">Lupa Password ?</a>
                    </div>
                </div>
                

                <button class="btn btn-warning btn-block flat mt-3">LOGIN</button>
            </div>
        </div>
    </form>

                    
@endsection
