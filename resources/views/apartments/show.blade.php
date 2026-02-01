@extends('layouts.app')

@section('title', 'Apartman')

@section('content')

<!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset($apartment->coverImage->path) }}" >
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

<h1>Bok</h1>

<p>Broj apartmana: {{ $apartment->title }}</p>

@endsection

