<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGeneralInquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'check_in'  => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'full_name' => 'required|string|min:3|max:100',
            'email'     => 'required|email:rfc,dns|max:255',
            'phone'     => 'required|string|min:6|max:30',
            'adults'    => 'required|integer|min:1|max:20',
            'children'  => 'nullable|integer|min:0|max:20',
            'note'      => 'nullable|string|max:2000',
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Ime i prezime je obavezno.',
            'email.required' => 'Email je obavezan.',
            'phone.required' => 'Broj mobitela je obavezan.',
            'adults.min' => 'Broj odraslih mora biti barem 1.',
            'children.min' => 'Broj djece ne može biti negativan.',
            'check_in.required'  => 'Datum dolaska je obavezan.',
            'check_out.required' => 'Datum odlaska je obavezan.',
            'check_in.after_or_equal' => 'Datum dolaska ne može biti u prošlosti.',
            'check_out.after' => 'Datum odlaska mora biti nakon datuma dolaska.',
        ];
    }
}
