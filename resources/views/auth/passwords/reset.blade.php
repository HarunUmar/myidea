@extends('layouts.app')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-5 text-center">
            <h5 class="mt-3">Silahkan Ganti Password Anda</h5>
        </div>
    </div>

    <div class="row justify-content-md-center mt-3">
        <div class="col-md-5 text-center">
            <form method="POST" action="{{ route('password.update') }}">
            @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <input id="email" type="email" class="form-control flat @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"  autocomplete="email" readonly>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <input id="password" type="password" class="form-control flat @error('password') is-invalid @enderror" name="password" autofocus autocomplete="new-password" placeholder="Password Baru">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control flat" name="password_confirmation" placeholder="Konfirmasi Password Baru" autocomplete="new-password">
                </div>

                <button class="btn btn-warning btn-block flat mt-3">Reset Password</button>
            </form>
        </div>
    </div>


@endsection
