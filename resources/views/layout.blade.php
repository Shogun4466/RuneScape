<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Norge @yield('title')</title>

        <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
        <header id="header">
            <div id="header-menu">
                <div id="header-menu-left">
                    <ul>
                        <li class="right"><a href="/about">About</a></li>
                        <li class="right"><a href="/members">Members</a></li>
                        <li class="right"><a href="/hiscore">Hiscores</a></li>
                        <li class="right"><a href="/">Home</a></li>
                    </ul>
                </div>
                <div id="header-menu-banner">
                    <a href="/"><img class="center" src="{{ url('css/images/default_clanmotif.png') }}" alt="Clan banner" /></a>
                </div>
                <div id="header-menu-right">
                    <ul>
                        <li><a href="/">Log in</a></li>
                        <li><a href="/">Register</a></li>
                        <li><a href="member">Profile</a></li>
                    </ul>
                </div>
            </div>
            <div id="header-avatar">
                <a href="/member"><img src="{{ url('css/images/avatar.png') }}"  alt="Profile image"/></a>
            </div>
        </header>

        @yield('content')


    </body>
</html>