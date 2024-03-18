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
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
        <a href="{{ route('about' )}}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    </div>

    <!--include dynamic navbar-->
<script src="{{ asset('js/navbar.js') }}"></script>

   <div class="container">
        @yield('content')
        <div>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
            <p>THIS IS A PARAGRAPH</p>
        </div>
    </div> 

<div class="footer" id="footer">
    <!--include footer-->
    @include('includes.footer')
</div>

<script src="{{ asset('js/footer.js') }}"></script>

</body>
</html> 