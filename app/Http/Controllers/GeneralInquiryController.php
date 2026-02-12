<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneralInquiryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GeneralInquiryMail;

class GeneralInquiryController extends Controller
{
    public function store(StoreGeneralInquiryRequest $request) 
    {
        $data = $request->validated();

        $to = config('mail.reservations_to');

        if(!$to) {
            abort(500, 'Nije postavljen RESERVATIONS_TO u .env');
        }

        Mail::to($to)->send(new GeneralInquiryMail($data));

        return back()->with('Success', 'Upit je poslab, javiti ćemo Vam se uskoro!');

    }
}
