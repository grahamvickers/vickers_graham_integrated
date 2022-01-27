@extends('layouts.app')

@section('content')
<section class="landing">
    <div id="searchCon">
    <p>Explore 10,000+ businesses for sale across North America.</p>
        <form>
            <label for="searchInput">Search:</label>
            <input type="search" id="searchInput" placeholder="ex. London">
        </form>
        <div id="searchDisplay">
            <p>listings will appear here</p>
        </div>
    </div>
    <div id="displayCon">

    </div>
</section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">Showing All Listing</h2>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>


                <div id="listings">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
