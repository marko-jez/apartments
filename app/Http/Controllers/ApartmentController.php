<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function show(Apartment $apartment)
    {
         $apartment->load(['images' => fn($q) => $q->orderBy('sort_order'), 'coverImage']);

        return view('apartments.show', compact('apartment'));
    }
}
