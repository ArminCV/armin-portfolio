<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Armin's Portfolio</title>
    <!-- Include app.css -->
    <link rel="{{ asset('css/app.css') }}" href="stylesheet">
</head>
<body>
    
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" >Armin's Portfolio</a>
            <button class="btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!--<span class="navbar-toggler-icon"></span>-->
            </button>
            <div class="navbar" id="navbarNav">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="active">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}">Projects</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>