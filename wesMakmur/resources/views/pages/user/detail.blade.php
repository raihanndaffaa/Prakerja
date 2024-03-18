@extends('layouts.perpus')

@section('content')
    <section class="home" id="home">
        <div class="row">
            <div class="content">

                <h3>{{ $artikel->judul }}</h3>
                <p>
                    {{ $artikel->isi }}
                </p>

                <a href="{{ url('/rekomendasi') }}" class="btn">Halaman Rekomendasi Jamu</a>
            </div>

        </div>

    </section>
    <section class="arrivals" id="arrivals">
        <h1 class="heading"><span> Contoh Produk </span></h1>
        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">
                @forelse($produk as $jamu)
                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="{{ asset('storage/' . $jamu->foto) }}" alt="" />
                        </div>
                        <div class="content">
                            <h3>{{ $jamu->namaProduk }}</h3>
                        </div>
                    </a>
                @empty
                    <div class="col-3 mb-5">
                        <h5>Contoh Produk Sedang Kosong</h5>
                    </div>
                @endforelse


            </div>
        </div>
    </section>
@endsection
