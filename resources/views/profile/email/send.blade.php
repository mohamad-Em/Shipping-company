@extends('layouts.main')
@section('content')
<div class="card">
    <form action="{{ route('user.profile.email.send') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Send PDF File</label>
        <input type="file" class="form-control" name="file">
        @error('file')
            <h5 class="alert alert-danger">{{ $message }}</h5>
        @enderror
        @if(Session::has('success'))
        <h5 class="alert alert-success">{{ Session::get('success') }}</h5>
        @endif
        <div class="row">
            <button type="submit" class="btn btn-success">SEND</button>
        </div>
    </form>
</div>
@endsection
