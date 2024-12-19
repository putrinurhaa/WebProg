@extends('layouts.app')

@section('navbar')
    @include('components.navbar', ['page' => 'login'])
@endsection

@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle row justify-content-center mt-2">
        <div class="card col-md-4 bg-white">
            <div class="card-header mt-2">
                <h1 class="card-title fw-bold text-center">Masuk</h1>
            </div>
            <div class="card-body">
                <form action="/login" method="post">
                    @csrf
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
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary col-md-4 offset-md-4 mb-2">Masuk</button>
                        <div class="row">
                            <p class="text-center">Tidak punya akun? Daftar <a href="/register">Di sini</a></p>
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
