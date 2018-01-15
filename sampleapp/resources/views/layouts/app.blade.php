<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Basic Laravel Website</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
<body>
   
    @include('inc/navbar')
   
<div class="container">
        @if(Request::is('/'))
    @include('inc/showcase')
    @endif
    <div class="row">
        <div class="col-md-8">
                @yield('content')
        </div>
        <div class="col-md-4">
                @include('inc/sidebar')
        </div>
    </div>
</div>

<footer id="footer" class="text-center">Copyright 2017 &copy; Scot Pfleghaar</footer>
   
    
</body>
</html>
