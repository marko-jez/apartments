<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('page.home');
    }

    public function about() {
        return view('page.about');
    }

    public function apartmentss() {
        $apartments = Apartment::where('is_active', true)->get();
        return view('page.apartments', compact('apartments'));
    }

    public function blog() {
        return view('page.blog');
    }

    public function single_blog() {
        return view('page.single_blog');
    }

    public function contact() {
        return view('page.contact');
    }

    public function elements() {
        return view('page.elements');
    }
}
