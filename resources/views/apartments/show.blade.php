@extends('layouts.app')

@section('title', $apartment->title)

@section('content')

@php
    $cover = $apartment->coverImage ?? $apartment->images->sortBy('sort_order')->first();
    $images = $apartment->images->sortBy('sort_order')->values();
@endphp

<!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/contact_hero.jpg')}}" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Pregled</span>
                                <h2>{{ $apartment->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br><br>
<!-- slider Area End-->

<br><br>

<div class="container">
    {{-- Galerija --}}
    <div class="row mb-4">
        <div class="col-lg-8">
        @if($images->count() > 0)

            {{-- Velika (cover) slika --}}
            @php
                $coverIndex = $images->search(fn($i) => (int)($i->is_cover) === 1);
                $coverIndex = $coverIndex === false ? 0 : $coverIndex;
            @endphp

            <div class="mb-3 position-relative">
                <a class="apartment-lightbox"
                href="{{ asset($images[$coverIndex]->path) }}"
                data-gallery="apartment-{{ $apartment->id }}"
                data-title="{{ $images[$coverIndex]->alt ?? $apartment->title }}">
                    <img src="{{ asset($images[$coverIndex]->path) }}"
                        alt="{{ $images[$coverIndex]->alt ?? $apartment->title }}"
                        style="width:100%; border-radius:12px; object-fit:cover; max-height:420px;">
                </a>

                
            </div>

            @if($images->count() > 0)
                {{-- velika cover slika ostaje kako imaš --}}

                {{-- Thumbnail carousel --}}
                @if($images->count() > 1)
                    <div class="apartment-swiper-container">

                            <div class="position-relative apartment-swiper-wrap">
                                <div class="swiper apartment-swiper">
                                    <div class="swiper-wrapper">
                                        @foreach($images as $img)
                                            <div class="swiper-slide">
                                                <a class="apartment-lightbox"
                                                    href="{{ asset($img->path) }}"
                                                    data-gallery="apartment-{{ $apartment->id }}"
                                                    data-title="{{ $img->alt ?? 'Fotografija' }}">
                                                        <img src="{{ asset($img->path) }}"
                                                            alt="{{ $img->alt ?? 'Fotografija' }}"
                                                            class="apartment-thumb">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <button type="button" class="apartment-swiper-prev apartment-nav-btn">‹</button>
                                <button type="button" class="apartment-swiper-next apartment-nav-btn">›</button>
                            </div>
                    </div>
                    <div class="mt-2">
                        <small class="text-muted">Ukupno fotografija: {{ $images->count() }}</small>
                    </div>
                @endif
            @endif
        @endif
    </div>

        {{-- Brze informacije + CTA --}}
        <div class="col-lg-4">
            <div class="card" style="border-radius:14px;">
                <div class="card-body">
                    <h5 class="card-title mb-2">Osnovne informacije</h5>

                    <ul class="list-unstyled mb-3">
                        <li>👨‍👩‍👧‍👦 Max gostiju: <strong>{{ $apartment->max_guests }}</strong></li>
                        <li>🛏️ Spavaće sobe: <strong>{{ $apartment->bedrooms }}</strong></li>
                        <li>🛁 Kupaonice: <strong>{{ $apartment->bathrooms }}</strong></li>
                        @if(!is_null($apartment->price_per_night))
                            <li>💶 Cijena od: <strong>{{ number_format($apartment->price_per_night, 2, ',', '.') }} €</strong> / noć</li>
                        @endif
                    </ul>

                    @if($apartment->short_description)
                        <p class="text-muted mb-3">{{ $apartment->short_description }}</p>
                    @endif

                    <a href="{{ route('inquiry.create') }}" class="btn btn-primary w-100" style="border-radius:10px;">
                        Pošalji upit o dostupnosti
                    </a>

                    <small class="text-muted d-block mt-2">
                        Odgovaramo u najkraćem mogućem roku.
                    </small>
                </div>
            </div>
        </div>
    </div>

    {{-- Opis + sadržaji (kasnije možeš proširiti) --}}
    <div class="row mb-5">
        <div class="col-lg-8">
            <h4>Opis apartmana</h4>
            <p>
                {{ $apartment->short_description ?? 'Udoban obiteljski apartman u Lokva Rogoznica, u blizini plaže. Idealno za miran odmor.' }}
            </p>

            <h5 class="mt-4">Sadržaji (primjer)</h5>
            <div class="d-flex flex-wrap" style="gap:10px;">
                <span class="badge bg-light text-dark">📶 Besplatni WiFi</span>
                <span class="badge bg-light text-dark">🚗 Privatni parking</span>
                <span class="badge bg-light text-dark">❄️ Klima uređaj</span>
                <span class="badge bg-light text-dark">🌊 Blizu plaže</span>
                <span class="badge bg-light text-dark">🍖 Roštilj</span>
                <span class="badge bg-light text-dark">🌅 Balkon/Terasa</span>
            </div>

            <h5 class="mt-4">Kućni red (primjer)</h5>
            <ul>
                <li>Prijava: od 14:00 do 20:00</li>
                <li>Odjava: do 10:00</li>
                <li>Pušenje: po dogovoru / prema pravilima objekta</li>
                <li>Kućni ljubimci: na upit</li>
                <li>Zabave: nisu dozvoljene</li>
            </ul>
        </div>
    </div>

    {{-- Galerija sve slike --}}
    @if($images->count() > 0)
        <div id="gallery" class="mb-5">
            <h4>Galerija</h4>
            <div class="row">
                @foreach($images as $img)
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <a href="{{ asset($img->path) }}" target="_blank">
                            <img src="{{ asset($img->path) }}"
                                 alt="{{ $img->alt ?? 'Fotografija' }}"
                                 style="width:100%; height:160px; border-radius:12px; object-fit:cover;">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Gallery img Start-->
    @if ($images->count() > 0)
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/gallery1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/gallery2.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/gallery3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->       
    @endif
</div>
@endsection
