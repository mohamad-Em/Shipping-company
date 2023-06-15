@extends('layouts.main')
@section('content')

<form action="{{ route('customer.excel_import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        @if(Session::has('success'))
        <h4 class="alert alert-success">{{ Session::get('success') }}</h4>
        @elseif (Session::has('error'))
        <h4 class="alert alert-danger">{{ Session::get('error') }}</h4>
        @endif
        <h5 class="card-header">Upload Excel File</h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Excel File:</label>
                <input class="form-control" name="file" type="file" />
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="send">
            </div>
            @error('file')
            <h4 class="alert alert-danger">{{ $message }}</h4>
            @enderror
        </div>
    </div>
    <a href="{{ route('customer.export_excel') }}" class="btn btn-primary">Export</a>

</form>
<table class="table">

    <thead>
        <th>User Name</th>
        <th>Date Time</th>
    </thead>
    <tbody class="table-border-bottom-0">
        @foreach ($rates as $row)
            <tr>

                <td>{{ $row->user_name }}</td>
                <td>{{ $carbon }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
