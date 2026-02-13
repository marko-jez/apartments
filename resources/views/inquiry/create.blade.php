@extends('layouts.app')

@section('title', 'Rezervacija')

@section('content')

<!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/aboutpage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Upit za rezervaciju</span>
                                <h2>Upit</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

<!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Provjerite dostupnost</h2>
                    </div>
                    <div class="col-6">
                        @if(session('success'))
                            <div style="padding:10px; border:1px solid #0a0; margin-bottom:10px;">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div style="padding:10px; border:1px solid #a00; margin-bottom:10px;">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('inquiry.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="check_in">Datum dolaska</label>
                                        <input
                                            class="single-input"
                                            name="check_in"
                                            id="check_in"
                                            type="date"
                                            value="{{ old('check_in') }}"
                                        >
                                        @error('check_in')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="check_out">Datum odlaska</label>
                                        <input
                                            class="single-input"
                                            name="check_out"
                                            id="check_out"
                                            type="date"
                                            value="{{ old('check_out') }}"
                                        >
                                        @error('check_out')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="adults">Broj odraslih</label>
                                        <div class="form-select">
                                            <select name="adults" id="adults">
                                                @for($i = 1; $i <= 10; $i++)
                                                    <option value="{{ $i }}" @selected((int)old('adults', 1) === $i)>
                                                        {{ $i }}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                        @error('adults')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="children">Broj djece</label>
                                        <div class="form-select">
                                            <select name="children" id="children">
                                                <option value="" @selected(old('children') === null || old('children') === '')>0</option>
                                                @for($i = 1; $i <= 10; $i++)
                                                    <option value="{{ $i }}" @selected((string)old('children') === (string)$i)>
                                                        {{ $i }}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                        @error('children')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="full_name">Puno ime</label>
                                        <input class="single-input valid" name="full_name" id="full_name" type="text" value="{{old('full_name')}}">
                                        @error('full_name')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email adresa</label>
                                        <input class="single-input valid" name="email" id="email" type="email"  value="{{old('email')}}" required>
                                        @error('email')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="full_name">Broj telefona</label>
                                        <input class="single-input" name="phone" id="phone" type="text" value="{{old('phone')}}">
                                        @error('phone')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="note">Dodajte napomenu</label>
                                        <textarea class="single-input w-100" name="note" id="note" cols="30" rows="9" >{{ old('note') }}</textarea>
                                        @error('note')
                                            <p style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Pošalji</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Lokva Rogoznica.</h3>
                                <p>Ivašnjak III 20, 21310</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+385 883 0987</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>kovacic.milka@gmail.com</h3>
                                <p>Pošalji nam svoj upit bilo kada!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->

@endsection