@extends('layouts.global')

@section('content')
<!-- <div class="container"> -->
    <div class="row justify-content-center " style="margin-top: 100px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Akun Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Silahkan Cek Email Anda. Kami Telah Mengirimkan Email Baru') }}
                        </div>
                    @endif

                    Hi,  {{ Auth::User()->name }} ^-^   ,<p />
                    {{ __('Kami Telah Mengirimkan Link Aktifasi Ke Email ') }}  {{ Auth::User()->email }} Silahkan Cek Email Anda <p />
                   
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                         {{ __('Jika Kamu Tidak Menerima Email, Silahkan Klik ') }} 
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Request Link') }}</button> <br/>
                        Untuk Mendapatkan Email Baru
	                </form>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
@endsection
