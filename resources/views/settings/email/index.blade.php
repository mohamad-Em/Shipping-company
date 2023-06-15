@extends('layouts.main')
@section('content')
<form action="{{ route('email.setting.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">email settings</h5>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email Sender</label>
                    <input type="email" name="email_send" value="{{ $setting->email_send ?? ''}}" class="form-control" autocomplete="off" id="exampleFormControlInput1" placeholder="Email Sender" />
                </div>
                @error('email_send')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Image" />
                </div>
                @error('image')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" name="title" value="{{ $setting->title ?? ''}}" class="form-control" autocomplete="off" id="exampleFormControlInput1" placeholder="Title" />
                </div>
                @error('title')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Body</label>
                    <textarea name="body" value="" class="form-control" id="exampleFormControlReadOnlyInputPlain1">{{ $setting->body ?? ''}}</textarea>
                </div>
                @error('description')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Ending</label>
                    <input type="text" name="ending" value="{{ $setting->ending ?? ''}}" class="form-control" id="exampleFormControlInput1" autocomplete="off" placeholder="Ending">
                </div>
                @error('ending')
                <h5 class="alert alert-danger">{{ $message }}</h5>
                @enderror
            </div>
            <input type="submit" class="form-control btn btn-info" value="send">
        </div>
    </div>
</form>
@endsection
