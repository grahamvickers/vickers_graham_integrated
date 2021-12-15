@extends('layouts.app')

@section('content')
<section class="landing">
    <div>
        <form>
            <label for="searchbox">Search:</label>
            <input type="search" id="searchbox" placeholder="i.e. LTD">
        </form>
        <div id="txtHint">
            <p>Listing search results...</p>
        </div>
    </div>
    <div id="maindiv">

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
