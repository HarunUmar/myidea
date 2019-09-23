@extends('layouts.app')

@section('content')
    
    <div class="row justify-content-md-center">
        <div class="col-md-5 text-center">
            <h5 class="mt-3">Silahkan Masukan Email Anda</h5>
        </div>
    </div>

     <div class="row justify-content-md-center mt-3">
        <div class="col-md-5 text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
            @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control flat @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback text-left" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                 <button class="btn btn-warning btn-block flat mt-3">Kirim Pemulihan Akun Ke Email</button>
            </form>
        </div>
    </div>
@endsection
