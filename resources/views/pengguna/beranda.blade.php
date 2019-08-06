@extends('pengguna.master')

@section('title', 'Beranda')

@section('content')
<div class="site-blocks-cover" style="background-image: url({{ asset('user_assets/images/banner.jpg') }});" data-aos="fade">
    <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
            <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                <h1 class="mb-2 text-white">SELAMAT DATANG DI TOKO SEPATU.</h1>
                <div class="intro-text text-center text-md-left">
                    <p class="mb-4 text-white">Anda bisa menemukan berbagai jenis sepatu. 
                    Mulai dari sepatu pria, wanita sampai anak-anak. </p>
                    <p>
                        <a href="{{ route('produk') }}" class="btn btn-sm btn-primary">Belanja Sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-md-12 site-section-heading text-center pt-4 pb-5">
                <h2>Kenapa Harus Di PiZiStore?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-truck"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Pengiriman Cepat</h2>
                    <p>Belanja sepatu di PiZi Store untuk pengiriman Kota Bandung kami antar langsung.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-shield"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Aman & Terpercaya</h2>
                    <p>Dijamin berkualitas dan 100% original.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-help"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Layanan Pelanggan</h2>
                    <p>Pelayanan Ramah, Respon Cepat.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-blocks-2">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-md-12 site-section-heading text-center pt-4 pb-5">
                <h2>Lihat Koleksi Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                <a class="block-2-item item1" href="{{ route('produk') }}?kategori=sepatu-pria">
                    <figure class="image">
                        <img src="{{ asset('user_assets/images/sepatupria.jpg') }}" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                        <span class="text-uppercase">Lihat Koleksi</span>
                        <h3>Pria</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <a class="block-2-item item2" href="{{ route('produk') }}?kategori=sepatu-wanita">
                    <figure class="image">
                        <img src="{{ asset('user_assets/images/sepatuwanita.jpg') }}" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                        <span class="text-uppercase">Lihat Koleksi</span>
                        <h3>Wanita</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                <a class="block-2-item item3" href="{{ route('produk') }}?kategori=sepatu-anak">
                    <figure class="image">
                        <img src="{{ asset('user_assets/images/sepatuanak.jpg') }}" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                        <span class="text-uppercase">Lihat Koleksi</span>
                        <h3>Anak-anak</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
