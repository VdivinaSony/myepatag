<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="/img/my.png" type="/img/my.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/scripts.js"></script>
</head>
<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
</div>
@include('inc.header')
@include('inc.hero')
<div class="container mt-5">
@include('inc.massages')
    <div class="row">
        <div class="col-8">
        @yield('content')
        <div>
         @if(Request::is('photo'))
            @include('inc.gallerythree')
            @include('inc.gallery')
            @include('inc.gallerytwo')
        @endif
        @if(Request::is('/'))
            @include('inc.home')
        @endif
        </div>
        </div>
        <div class="col-3">
        @include('inc.aside')
        @include('inc.contact')
        </div>

    </div>
</div>
@include('inc.footer')
</body>
</html>
