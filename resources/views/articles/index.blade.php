<?php
use Illuminate\Support\Facades\Auth;
?>

@extends('layouts.app')

@section('navbar')
    @include('components.navbar', ['page' => 'articles'])
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card border-0 bg-white">
            <div class="card-header bg-warning">
                <h1 class="text-center">Artikel</h1>
            </div>
            <div class="card-body">
                <form action="/articles" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari artikel" aria-label="Search articles" aria-describedby="button-search" name="search" value="{{$search}}">
                        <button class="btn btn-outline-secondary" type="button" id="button-search" name="submit">Cari</button>
                    </div>
                </form>
                <div class="row">
                    @forelse ($articles as $article)
                        <a class="col-4 d-flex align-items-stretch my-2" href="/articles/{{$article->id}}">
                            <div class="card w-100">
                                <img src="{{$article->image}}" alt="" class="card-img-top object-fit-cover" height="250">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{$article->title}}</h5>
                                    <p class="card-text">{{$article->content}}</p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div class="col-12 mt-5">
                            <h2 class="fw-bold text-center">Tidak Ada artikel</h2>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-2 offset-md-5">
                {{$articles->links()}}
            </div>
        </div>
    </div>
    @if(Auth::check())
        <div class="card border-0 bg-white">
            <div class="card-header bg-warning">
                <h1 class="text-center">Tambah Artikel</h1>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-body">
                <form action="/articles" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label @error('title') is-invalid @enderror">Judul</label>
                        <input type="text" class="form-control" id="title" name="title">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content"
                            class="form-label @error('content') is-invalid @enderror">Konten</label>
                        <textarea name="content" id="content" rows="8" class="form-control"></textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary col-md-2 offset-md-5">Tambah Artikel</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
@endsection

@section('footer')
    @include('components.footer')
@endsection
