<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bizz.net</title>
    <link rel="stylesheet" href="https://use.typekit.net/nku3uiu.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <header id="mainHead">
        <img src="/images/bn_icon_1.svg" alt="Royal Hunt Logo" id="logo" >
        <nav id="mainNav">
            <h2 class="hidden">Main Navigation</h2>
            <ul>
                <li><a href="/register">SIGN UP</a></li>
                <li><a href="/login">LOGIN</a></li>
                <li><a href="/login">HOME</a></li>
            </ul>
        </nav>
        <div id="navOverCon" class="overlay">
            <h2 class="hidden">Main Navigation</h2>
            <a href="javascript:void(0)"class="closebtn" onclick="hideNav()">&times;</a>
            <div class="overlay-con">
                <ul>
                    <li><a href="/register">SIGN UP</a></li>
                    <li><a href="/login">LOGIN</a></li>
                    <li><a href="/login">HOME</a></li>
                </ul>
            </div>
        </div>
    </header>
        
    @yield('content')

    <footer>
        <p id="footP">DESIGNED & DEVELOPED BY GRAHAM VICKERS &COPY;</p>
    </footer>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
