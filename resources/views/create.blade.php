@extends('layouts.app')

@section('content')
<section class="introCon">
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
</section>
 
@endsection
