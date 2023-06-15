@extends('layouts.main')
@section('content')
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Nmae</th>
                    <th>Data Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0" id="tbody">
                @php
                $num = 1;
                @endphp
                @foreach ($books as $row )
                <tr>
                    <td>{{ $num++ }}</td>
                    <td>{{ $row->customer->name }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td><a href="{{ route('user.profile.ticket.view',$row->id) }}" class="btn btn-info " id="click">view</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
