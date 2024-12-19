<?php
use Illuminate\Support\Facades\Auth;
?>

<nav class="navbar navbar-expand-lg bg-success px-4" style="space-between; position: sticky; top: 0; z-index: 1000;">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold" href="/home">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white {{$page == 'home' ? 'active' : ''}}" aria-current="page" href="/home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{$page == 'products' ? 'active' : ''}}" aria-current="page" href="/products">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{$page == 'articles' ? 'active' : ''}}" aria-current="page" href="/articles">Artikel</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2">
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link text-white {{$page == 'profile' ? 'active' : ''}}" aria-current="page" href="/profile">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link text-white">Keluar</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link text-white {{$page == 'login' ? 'active' : ''}}" aria-current="page" href="/login">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{$page == 'register' ? 'active' : ''}}" aria-current="page" href="/register">Daftar</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
