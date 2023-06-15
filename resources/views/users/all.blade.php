@extends('layouts.main')
@section('content')
<div class="card">
    <h5 class="card-header">All User</h5>
    <div class="table-responsive text-nowrap">
        <a href="{{ route('user.create') }}" class="btn btn-primary ">create</a>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>FullName</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                $num = 1;
                @endphp
                @foreach ($users as $row )
                <tr>
                    <td>{{ $num++ }}</td>
                    <td><img src="{{ asset('images/user/'.$row->image) }}" width="100" class="rounded-circle"></td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->fullName }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->role }}</td>

                    <td>
                        <a href="{{ route('user.edit',$row->id) }}" class="btn btn-info">edit</a>
                        <a href="{{ route('user.delete',$row->id) }}" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
