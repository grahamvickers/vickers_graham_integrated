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
            </ul>
        </nav>
    </header>
        
    @yield('content')

    <footer>
        <p id="footP">DESIGNED & DEVELOPED BY GRAHAM VICKERS &COPY;</p>
    </footer>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
