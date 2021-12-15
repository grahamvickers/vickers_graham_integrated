@extends('layouts.master')

@section('content')
    <section class="landing">
            <h2>Find Your Next Venture Capital Project Today!</h2>
            <p>Explore 10,000+ businesses for sale across North America.</p>
    </section>

    <section class="introCon"> 
        <h2>What Makes Bizz.Net The Preferred Business Market Place</h2>

        <div class="introBoxes">
            <img src="/images/revenue.svg" alt="">
            <h3>Financial Records</h3>
            <p>Clear financial records that you can understand to wage your decision making.</p>
        </div>

        <div class="introBoxes">
            <img src="/images/fees.svg" alt="">
            <h3>No Hidden Fees</h3>
            <p>Acquiring a business with us is simple and easy when there are no hidden fees and no b.s.</p>
        </div>

        <div class="introBoxes">
            <img src="/images/connected.svg" alt="">
            <h3>Global Reach</h3>
            <p>Listing and buying on our platform sets you up for success with our global reach to buyers, investors and VC’s.</p>
        </div>

        <div class="introBoxes">
            <img src="/images/find.svg" alt="">
            <h3>Find What You Need</h3>
            <p>With our platform you can find exactly the type of business you want with our filtering options.</p>
        </div>
    </section>

    <section id="signUp">
        <div id="signUpCon">
            <h2>Join the thousands of satisfied investors now</h2>
            <a class="button" href="/register">JOIN NOW</a>
        </div>
        <img src="/images/join_1.jpg" alt="JOIN NOW">
    </section>


    
@endsection
