<x-mail::message>
# Novi upit za dostupnost

**Ime i prezime:** {{ $data['full_name'] }}

**Email:** {{ $data['email'] }}

**Telefon:** {{ $data['phone'] }}

**Datum dolaska:** {{ $data['check_in'] ?? '-' }}  
**Datum odlaska:** {{ $data['check_out'] ?? '-' }}

**Odraslih:** {{ $data['adults'] }}  
**Djece:** {{ $data['children'] ?? 0 }}



@if(!empty($data['note']))

### Napomena

{{ $data['note'] }}
@endif

Hvala