@extends('layouts.sub')

@section('navbar')
    @include('components.navbar', ['page' => 'products'])
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-bold">Profil</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="profile-image text-center">
                    <img src="https://preview.redd.it/l0ergarfzst61.png?auto=webp&s=5de076eac09bb645d58b11cd8ce82f99ec487329" alt="Profile Image" class="img-fluid rounded-circle" width="150">
                </div>
            </div>
            <div class="col-9">
                <div class="profile-info">
                    <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    <p><strong>Bergabung pada:</strong> {{ Auth::user()->created_at->format('d M Y') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
