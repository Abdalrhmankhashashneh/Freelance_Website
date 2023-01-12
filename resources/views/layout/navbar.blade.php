<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lordtik</title>
    @yield('style_up')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('style_down')
</head>
<body>
    <header><nav>
        <div class="logo">
            <div class="logo_img">
                <h1>LordTik</h1>
            </div>
        </div>
        <div class="links">
            <ul>
                
                <li><a class="nav-link @if (\Request::route()->named('home')) link_active  @endif" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link @if (\Request::route()->named('about')) link_active  @endif" href="{{ route('about') }}">About</a></li>
                <li><a class="nav-link @if (\Request::route()->named('contact')) link_active  @endif" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
        <div class="fast-btn">
            <a href="#" class="btn-dark">Conract Us</a>
        </div>
            
        </nav>
    </header>