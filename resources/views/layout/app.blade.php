<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Armin's Portfolio</title>
    <!-- Include app.css -->
    <link href="{{ asset('css\app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="navbar">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about' )}}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </div>

   <div class="container">
        @yield('content')
    </div> 

    <div style="padding:20px;margin-top:30px;background-color:#1abc9c;height:1500px;">
        <h1>Fixed Top Navigation Bar</h1>
        <h2>Scroll this page to see the effect</h2>
        <h2>The navigation bar will stay at the top of the page while scrolling</h2>
      
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
        <p>Some text some text some text some text..</p>
      </div>

<!--for dynamic navbar-->
<script src="{{ asset('js/navbar.js') }}"></script>

</body>
</html>