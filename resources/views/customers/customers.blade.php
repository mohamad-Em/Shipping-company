@extends('layouts.main')
@section('content')
<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>FullName</th>
                    <th>Phoen</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                $num = 1;
                @endphp
                @foreach ($customers as $row )
                <tr>
                    <td>{{ $num++ }}</td>
                    <td><img src="{{ asset('images/customers/'.$row->image) }}" width="100" class="rounded-circle"></td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->fullName }}</td>
                    <td>{{ $row->phone }}</td>
                    <td><a href="{{ route('customer.delete',$row->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
