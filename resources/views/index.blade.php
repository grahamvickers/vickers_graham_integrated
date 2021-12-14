@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h1>Bomberman Brothers</h1>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Create new Bomberman!
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
                        <button type="submit" class="btn btn-primary">Create Bomberman</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="bombermen" class="row mt-4 mb-4 justify-content-md-center">
        <p>
            Loading Bomberman brothers...
        </p>
    </div>
@endsection
