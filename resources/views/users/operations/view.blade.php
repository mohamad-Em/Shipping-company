@extends('layouts.main')
@section('content')

<div class="card">
    <h5 class="card-header">Customer Information</h5>
    @foreach ($record as $row )

    <h5 class="card-header">Name: {{ $row->customer->name }}</h5>
    <h5 class="card-header">Email: {{ $row->customer->email }}</h5>
    <h5 class="card-header">FullName: {{ $row->customer->fullName }}</h5>
    <h5 class="card-header">Phone: {{ $row->customer->phone }}</h5>

    @endforeach

</div>
<div class="card">
    <h5 class="card-header">Rate Information:</h5>
    @foreach ($record as $row )
    <h5 class="card-header">Port Of Loading_POL: {{ $row->rate->Port_of_Loading_POL }}</h5>
    <h5 class="card-header">Country Of Origin: {{ $row->rate->Country_of_Origin }}</h5>
    <h5 class="card-header">Port Of Destination_POD: {{ $row->rate->Port_of_Destination_POD }}</h5>
    <h5 class="card-header">Country Of Destination: {{ $row->rate->Country_of_Destination }}</h5>
    <h5 class="card-header">VESSEL VOYAGE: {{ $row->rate->VESSEL_VOYAGE }}</h5>
    <h5 class="card-header">Cut Off: {{ $row->rate->Cut_off }}</h5>
    <h5 class="card-header">Departure Date: {{ $row->rate->Departure_Date }}</h5>
    <h5 class="card-header">Arrival Date: {{ $row->rate->Arrival_Date }}</h5>
    <h5 class="card-header">Container Currency: {{ $row->rate->container_currency }}</h5>
    <h5 class="card-header">Shipping Line: {{ $row->rate->Shipping_Line }}</h5>
    <h5 class="card-header">VALID: {{ $row->rate->VALID }}</h5>
    @endforeach
    <h5 class="card-header">20_Standard: {{ $rate[0]['20_Standard'] }} </h5>
    <h5 class="card-header">40_Standard: {{ $rate[0]['40_Standard'] }} </h5>
    <h5 class="card-header">20_Refrigerated: {{ $rate[0]['20_Refrigerated'] }} </h5>
    <h5 class="card-header">40_Refrigerated: {{ $rate[0]['40_Refrigerated'] }} </h5>
    <h5 class="card-header">40_High_Cube: {{ $rate[0]['40_High_Cube'] }} </h5>
    @foreach ($record as $row )
    <h5 class="card-header">Transit Time: {{ $row->rate->Transit_time }}</h5>
    <h5 class="card-header">Routing: {{ $row->rate->Routing }}</h5>
    <h5 class="card-header">Free Time At Origin: {{ $row->rate->Free_time_at_Origin }}</h5>
    <h5 class="card-header">Free Time At Destination: {{ $row->rate->Free_Time_at_Destination }}</h5>
    <h5 class="card-header">Rate Type: {{ $row->rate->Rate_Type }}</h5>
    <h5 class="card-header">Booking Type: {{ $row->rate->Booking_Type }}</h5>
    <h5 class="card-header">Origin Charges OTHC: {{ $row->rate->Origin_Charges_OTHC }}</h5>
    <h5 class="card-header">OTHC Currency: {{ $row->rate->OTHC_Currency }}</h5>
    <h5 class="card-header">Destination Charge DTHC: {{ $row->rate->Destination_Charge_DTHC }}</h5>
    <h5 class="card-header">DTHC Currency: {{ $row->rate->DTHC_Currency }}</h5>
    <h5 class="card-header">Documentation: {{ $row->rate->Documentation }}</h5>
    <h5 class="card-header">Docs Currency: {{ $row->rate->Docs_Currency }}</h5>
    <h5 class="card-header">Cancelation Fee: {{ $row->rate->Cancelation_fee }}</h5>
    <h5 class="card-header">Cancelation Currency: {{ $row->rate->Cancelation_Currency }}</h5>
    @endforeach
</div>
<div class="card">
    <div class="card-body">
        @foreach ($notes as $row )
        Notes: {{ $row->title }}<br>
        Created At: {{ $row->date }} By: {{ $row->user->name}} Department: {{ $row->user->role }}<br>
        @endforeach

    </div>
</div>
</form>
<form action="" method="POST">
    @csrf

    <select class="form-control" id="options">
        <option>Select Action</option>
        <option value="1">Data Checked</option>
        <option value="2">phone not available</option>
        <option value="3">cst no answer</option>
        <option value="4">send maile</option>
        <option value="5">close ticket </option>
    </select>
</form>
<a href="{{ route('user.operation.generatePDF',$row->id) }}" class="btn btn-info">Export PDF</a>

<a href="{{ route('user.operation.updateStatus',$record[0]->id) }}" style="display: none" class="btn btn-info">EVGM & PL</a>
@endsection
