@extends('layouts.main')
@section('content')
<form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">website settings</h5>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $setting->name ?? ''}}" class="form-control" autocomplete="off" id="exampleFormControlInput1" placeholder="Name" />
                </div>
                @error('name')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $setting->email ?? ''}}" class="form-control" autocomplete="off" id="exampleFormControlInput1" placeholder="Email" />
                </div>
                @error('email')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Type</label>
                    <input type="text" name="type" value="{{ $setting->type ?? ''}}" class="form-control" id="exampleFormControlInput1" autocomplete="off" placeholder="Type">
                </div>
                @error('type')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Url</label>
                    <input type="text" name="url" value="{{ $setting->url ?? ''}}" class="form-control" id="exampleFormControlInput1" autocomplete="off" placeholder="Url">
                </div>
                @error('url')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Logo</label>
                    <input type="file" name="logo" class="form-control" id="exampleFormControlInput1" placeholder="Name" />
                </div>
                @error('logo')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Description</label>
                    <textarea name="description" value="" class="form-control" id="exampleFormControlReadOnlyInputPlain1">{{ $setting->description ?? ''}}</textarea>
                </div>
                @error('description')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
            </div>
            <input type="submit" class="form-control btn btn-info" value="send">
        </div>
    </div>
</form>
@endsection
