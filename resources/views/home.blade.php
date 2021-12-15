@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">Showing All Listing</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div id="bombermen" class="row mt-4 mb-4 justify-content-md-center">
                    <p>
                        Loading Some Businesses...
                    </p>
                </div>

                <div id="listings">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
