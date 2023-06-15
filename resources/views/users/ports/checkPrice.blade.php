@extends('layouts.main')
@section('content')
<div class="card">
    <form action="{{ route('user.checkPrice.search') }}" method="POST">
        @csrf
        <label for="Port_of_Loading_POL">Port of Loading POL</label>
        <select name="Port_of_Loading_POL" class="form-control">
            @foreach ($rates as $row )
            <option value="{{ $row->Port_of_Loading_POL }}">{{ $row->Port_of_Loading_POL }}</option>
            @endforeach
        </select>
        <label for="Country_of_Origin">Country_of_Origin</label>
        <select name="Country_of_Origin" class="form-control">
            @foreach ($rates as $row )
            <option value="{{ $row->Country_of_Origin }}">{{ $row->Country_of_Origin }}</option>
            @endforeach
        </select>
        <label for="Port_of_Destination_POD">Port_of_Destination_POD</label>
        <select name="Port_of_Destination_POD" class="form-control">
            @foreach ($rates as $row )
            <option value="{{ $row->Port_of_Destination_POD }}">{{ $row->Port_of_Destination_POD }}</option>
            @endforeach
        </select>
        <label for="Country_of_Destination">Country_of_Destination</label>
        <select name="Country_of_Destination" class="form-control">
            @foreach ($rates as $row )
            <option value="{{ $row->Country_of_Destination }}">{{ $row->Country_of_Destination }}</option>
            @endforeach
        </select>
        <input type="submit" value="search" class="btn btn-info form-control">
    </form>
</div>
<div class="card">
</div>


@endsection
