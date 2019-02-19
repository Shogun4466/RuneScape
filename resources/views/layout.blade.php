<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Norge @yield('title')</title>

        <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header id="header">
            <div id="header-menu">
                <div id="header-menu-left">
                    <ul>
                        <li class="right"><a href="about">About</a></li>
                        <li class="right"><a href="member">Members</a></li>
                        <li class="right"><a href="hiscore">Hiscores</a></li>
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
                        <li><a href="profile">Profile</a></li>
                    </ul>
                </div>
            </div>
            <div id="header-avatar">
                <a href="profile"><img src="{{ url('css/images/avatar.png') }}"  alt="Profile image"/></a>
            </div>
        </header>

        @yield('content')


    </body>
</html>