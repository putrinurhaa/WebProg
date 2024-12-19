@extends('layouts.app')

@section('navbar')
    @include('components.navbar', ['page' => 'home'])
@endsection

@section('content')
    <div class="container text-center" style="margin-top: 50px;">
        <h1>Selamat Datang di MakanAja</h1>
        <h3>Selamatkan Pangan, Hemat Biaya, Sejahterakan Bersama</h3>
        <p>Bertanggung Jawab dengan Produksi dan Konsumsi Ga Harus Susah!</p>

        <div class="container mt-5">
            <p>
                MakanAja hadir sebagai solusi cerdas untuk mendukung konsumsi dan produksi pangan yang bertanggung jawab tanpa harus repot!
                Dengan mengusung semangat "Selamatkan Pangan, Hemat Biaya, Sejahterakan Bersama," MakanAja mengajak kita semua untuk bersama-sama mengurangi limbah makanan, menghemat pengeluaran, dan menciptakan ekosistem pangan yang lebih berkelanjutan.
                Melalui langkah sederhana dan kreatif, MakanAja membuka peluang bagi setiap individu untuk berkontribusi menyelamatkan bumi sekaligus meningkatkan kesejahteraan bersama.
                Karena bertanggung jawab dengan pangan itu mudah, bermanfaat, dan penuh kebaikan!
            </p>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 65vh;">
                <div class="col-md-6 mb-3">
                    <a href="{{ route('products') }}"  class="btn btn-success d-flex align-items-center justify-content-center btn-lg w-100" style="border-radius: 10px; height: 220px;">Produk</a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('articles') }}" class="btn btn-warning d-flex align-items-center justify-content-center btn-lg w-100" style="border-radius: 10px; height: 220px;">Artikel</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
