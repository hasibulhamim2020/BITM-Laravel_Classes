<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
<header class="mb-5">
        @include('header')
</header>


<section class="container">
    @yield('content')
</section>


<footer>
    @include('footer')
</footer>
