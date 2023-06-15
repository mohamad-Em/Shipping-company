@extends('layouts.main')
<title>Create User</title>
@section('content')
<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">Form Controls</h5>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" autocomplete="off" />
                </div>
                @error('name')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Email</label>
                    <input class="form-control" type="email" name='email' id="exampleFormControlReadOnlyInput1" placeholder="Email" autocomplete="off" />
                </div>
                @error('email')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Password</label>
                    <input type="password" name='password' class="form-control" autocomplete="off">
                </div>

                @error('password')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">FullName</label>
                    <input type="text" name='fullName' class="form-control" id="exampleFormControlReadOnlyInputPlain1" placeholder="FullName" autocomplete="off">
                </div>
                @error('fullName')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Phone</label>
                    <input type="text" name='phone' class="form-control" id="exampleFormControlReadOnlyInputPlain1" placeholder="Phone" autocomplete="off">
                </div>
                @error('phone')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Select Role</label>
                    <select name='role' class="form-control">
                        @foreach ($roles as $role )
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('role')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Image</label>
                    <input type="file" name='image' class="form-control" id="exampleFormControlReadOnlyInputPlain1" value="email@example.com" />
                </div>
                @error('image')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <input id="save" type="submit" class="btn btn-success" value="save">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
