@extends('layouts.main')
@section('content')
<div class="card">
    <h5 class="card-header">Search Information:</h5>
    <h5 class="card-header">Port Of Loading_POL: {{ $search[0]->Port_of_Loading_POL }}</h5>
    <h5 class="card-header">Country Of Origin: {{ $search[0]->Country_of_Origin }}</h5>
    <h5 class="card-header">Port Of Destination_POD: {{ $search[0]->Port_of_Destination_POD }}</h5>
    <h5 class="card-header">Country Of Destination: {{ $search[0]->Country_of_Destination }}</h5>
    <h5 class="card-header">VESSEL VOYAGE: {{ $search[0]->VESSEL_VOYAGE }}</h5>
    <h5 class="card-header">Cut Off: {{ $search[0]->Cut_off }}</h5>
    <h5 class="card-header">Departure Date: {{ $search[0]->Departure_Date }}</h5>
    <h5 class="card-header">Arrival Date: {{ $search[0]->Arrival_Date }}</h5>
    <h5 class="card-header">Container Currency: {{ $search[0]->container_currency }}</h5>
    <h5 class="card-header">Shipping Line: {{ $search[0]->Shipping_Line }}</h5>
    <h5 class="card-header">VALID: {{ $search[0]->VALID }}</h5>
    <h5 class="card-header">Transit Time: {{ $search[0]->Transit_time }}</h5>
    <h5 class="card-header">Routing: {{ $search[0]->Routing }}</h5>
    <h5 class="card-header">Free Time At Origin: {{ $search[0]->Free_time_at_Origin }}</h5>
    <h5 class="card-header">Free Time At Destination: {{ $search[0]->Free_Time_at_Destination }}</h5>
    <h5 class="card-header">Rate Type: {{ $search[0]->Rate_Type }}</h5>
    <h5 class="card-header">Booking Type: {{ $search[0]->Booking_Type }}</h5>
    <h5 class="card-header">Origin Charges OTHC: {{ $search[0]->Origin_Charges_OTHC }}</h5>
    <h5 class="card-header">OTHC Currency: {{ $search[0]->OTHC_Currency }}</h5>
    <h5 class="card-header">Destination Charge DTHC: {{ $search[0]->Destination_Charge_DTHC }}</h5>
    <h5 class="card-header">DTHC Currency: {{ $search[0]->DTHC_Currency }}</h5>
    <h5 class="card-header">Documentation: {{ $search[0]->Documentation }}</h5>
    <h5 class="card-header">Docs Currency: {{ $search[0]->Docs_Currency }}</h5>
    <h5 class="card-header">Cancelation Fee: {{ $search[0]->Cancelation_fee }}</h5>
    <h5 class="card-header">Cancelation Currency: {{ $search[0]->Cancelation_Currency }}</h5>
</div>
<a href="{{ route('user.home') }}" class="btn btn-success">Back To Home Page</a>
@endsection
