@extends('layouts.app')

@section('navbar')
    @include('components.navbar', ['page' => 'register'])
@endsection

@section('content')
<div class="container position-absolute top-50 start-50 translate-middle row justify-content-center mt-5">
    <div class="card col-md-6 bg-white">
        <div class="card-header">
            <h1 class="card-title fw-bold text-center">Daftar</h1>
        </div>
        <div class="card-body">
            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required
                        autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" required
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="confirm" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" name="confirm" id="confirm"
                        class="form-control @error('confirm') is-invalid @enderror" required>
                    @error('confirm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary col-md-4 offset-md-4 mb-2">Daftar</button>
                    <div class="row">
                        <p class="text-center">Sudah memiliki akun? Masuk <a href="/login">Di sini</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
