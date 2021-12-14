@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="row justify-content-md-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Create a new Business Listing!
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('bomberman.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" name="name" id="name" type="text" />
                            @error('name')
                                <div class="help-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input class="form-control" name="avatar" id="avatar" type="file" />
                            @error('avatar')
                                <div class="help-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Create A Business</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="bombermen" class="row mt-4 mb-4 justify-content-md-center">
        <p>
            Loading Some Businesses...
        </p>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
