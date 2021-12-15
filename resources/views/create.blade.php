@extends('layouts.app')

@section('content')
<!-- <section class="introCon">
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
</section> -->

<section class="introCon">
    <div class="col-8"> 
        <div class="card">
            <div class="card-header">
                Create a new Business Listing!
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('listing.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" name="name" id="name" type="text" />
                        @error('name')
                            <div class="help-block text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="img">Exterior of Business Image</label>
                        <input class="form-control" name="img" id="img" type="file" accept="image/jpg"/>
                        @error('img')
                            <div class="help-block text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Business Address</label>
                        <input class="form-control" name="address" id="address" type="text" />
                        @error('address')
                            <div class="help-block text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Listing Price</label>
                        <input class="form-control" name="price" id="price" type="text" />
                        @error('price')
                            <div class="help-block text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="profit">Net Profit %</label>
                        <input class="form-control" name="profit" id="profit" type="text" />
                        @error('profit')
                            <div class="help-block text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="income">Net Income $</label>
                        <input class="form-control" name="income" id="income" type="text" />
                        @error('income')
                            <div class="help-block text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Net Income $</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                        @error('income')
                            <div class="help-block text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                
                    <button type="submit" class="btn btn-primary">Create Business</button>
                </form>
            </div>
        </div>
    </div>
</section>
 
@endsection
