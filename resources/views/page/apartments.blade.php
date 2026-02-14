@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/servicespage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Pregled</span>
                                <h2>Apartmani</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br><br>
        <!-- slider Area End-->

        <!-- Room Start -->
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Apartmani</h3>
                            </div>
                            <h3 class="archivment-back">Apartmani</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($apartments as $apartment)
                        
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="{{ route('apartments.show', $apartment) }}"><img src="{{ asset($apartment->coverImage->path) }}" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="{{ route('apartments.show', $apartment) }}">{{ $apartment->title }}</a></h3>
                                <div class="per-night">
                                    <span><u>€</u>{{ $apartment->price_per_night }} <span>/ noćenje</span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach


        <!-- Gallery img Start-->
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

@endsection