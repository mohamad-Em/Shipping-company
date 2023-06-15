@extends('layouts.main')
@section('content')
<form action="{{ route('user.update',$edit[0]->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">Form Controls</h5>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $edit[0]->name }}" class="form-control" id="exampleFormControlInput1" placeholder="Name" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ $edit[0]->email }}" id="exampleFormControlReadOnlyInput1" placeholder="Email" />
                </div>
                @error('email')
                <h5>{{ $message }}</h5>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">FullName</label>
                    <input type="text" name="fullName" value="{{ $edit[0]->fullName }}" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1">
                </div>
                @error('fullName')
                <h5>{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{ $edit[0]->phone }}" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1">
                </div>
                @error('phone')
                <h5>{{ $message }}</h5>
                @enderror

                @error('image')
                <h5>{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
