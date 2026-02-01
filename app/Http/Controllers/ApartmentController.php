<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function show($id)
    {
        $apartment = Apartment::with('coverImage')->findOrFail($id);

        return view('apartments.show', compact('apartment'));
    }
}
