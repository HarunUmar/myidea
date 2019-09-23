@extends('layouts.app')

@section('content')

    <div class="row justify-content-md-center">
        <div class="col-md-5 text-center">
            <h5 class="mt-3">Daftar Akun Baru Anda Sekarang</h5>
        </div>
    </div>

    <div class="row justify-content-md-center mt-4">
        <div class="col-md-5 col">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="form-group">
                    <input id="name" type="text" class="form-control flat @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Nama Lengkap">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group mt-4">
                    <input id="email" type="email" class="form-control flat @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group  mt-4">
                    <select class="form-control flat @error('jenkel') is-invalid @enderror" name="jenkel">
                        <option value="">Jenis Kelamin ?</option>
                        <option value="0">Laki-Laki</option>
                        <option value="1">Perempuan</option>
                    </select>

                    @error('jenkel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <input id="password" type="password" class="form-control flat @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <input id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control flat" name="password_confirmation"  autocomplete="new-password">
                </div>

                <button class="btn btn-warning btn-block flat mt-4">Daftar</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-md-center mt-2">
        <div class="col-md-5 ">
            <p class="text-center">Sudah Punya Akun ? <a href="{{ route('login') }}" class="text-warning">Login Di sini</a> </p>
        </div>
    </div>

   


                   
@endsection
