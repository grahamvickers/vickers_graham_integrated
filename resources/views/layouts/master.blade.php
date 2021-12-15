<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bizz.net</title>
    <link rel="stylesheet" href="https://use.typekit.net/nku3uiu.css">
    <script src="{{ asset('js/main.js') }}" defer></script>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header id="mainHead">
        <img src="/images/bn_icon_1.svg" alt="Royal Hunt Logo" id="logo" >

        <!-- desktop nav -->
        <nav id="mainNav">
            <h2 class="hidden">Main Navigation</h2>
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/home">LISTINGS</a></li>
                <li><a href="/register">SIGN UP</a></li>
                <li><a href="/login">LOGIN</a></li>
            </ul>
        </nav>

        <!-- hambuger nav -->
        <span id="hmbgrMenu" style="font-size:30px;cursor:pointer;color: #3C35F2;" onclick="showNav()">&#9776; </span>

        <div id="navOverCon" class="overlay">
            <h2 class="hidden">Main Navigation</h2>
            <a href="javascript:void(0)"class="closebtn" onclick="hideNav()">&times;</a>
            <div class="overlay-con">
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/home">LISTINGS</a></li>
                    <li><a href="/register">SIGN UP</a></li>
                    <li><a href="/login">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </header>

     <h1 class="hidden">Bizz.Net Online Business Marketplace</h1> 
     
    <main>
        @yield('content')

    </main> 
    

    <footer>
        <p id="footP">DESIGNED & DEVELOPED BY GRAHAM VICKERS &COPY;</p>
    </footer>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
