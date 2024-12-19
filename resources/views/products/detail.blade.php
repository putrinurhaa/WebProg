@extends('layouts.sub')

@section('navbar')
    @include('components.navbar', ['page' => 'products'])
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card border-0 bg-white">
            <div class="card-header">
                <h1 class="text-center fw-bold">{{$product->title}}</h1>
            </div>
            <div class="card-body">
                <div class="row mt-3">
                    {{$product->description}}
                    <img src="{{$product->image}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection