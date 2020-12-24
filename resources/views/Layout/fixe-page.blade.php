<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
</head>
<body>
<header id="topo">
    <div id="titre">
        <a href="/anasayfa" style="text-decoration: none;">
        <br>
        <img src="{{asset('image/logo.png')}}" alt="logo" width="80" height="auto" />

        <h1>The Technology</h1>
        <div style="clear:left;"></div>
        </a>
    </div>
</header>
<div class="main-content">
    @yield('content')
</div>
<footer>
    Copyreight 2020
</footer>
</body>
</html>
