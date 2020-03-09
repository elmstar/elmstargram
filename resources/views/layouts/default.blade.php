<!DOCTYPE html>
<htmp lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Учебный вариант соц. сети</title>
        @yield('styles')
        <link href="/css/default.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <a href="{{route('home')}}">
            <div class="logo"></div>
        </a>
        <div class="header-searching">
            <form action="{{route('search')}}" method="POST">
                {{ csrf_field() }}
                <input name="search"><input type="submit" value="GO">
            </form>
        </div>
    <nav>
        <ul>
        <li
                @if(\Request::route()->getName()=="home")
                     class="mainMenuItem mainMenuItemCurrent"
                @else
                    class="mainMenuItem"
                @endif
            ><a href="{{route("home")}}">Домой</a></li>
            <li
                @if (\Request::route()->getName() === "interesting")
                    class="mainMenuItem mainMenuItemCurrent"
                @else
                    class="mainMenuItem"
                @endif
                >
                <a href="{{route("interesting")}}">Интересное</a>
            </li>
            <li
                @if (\Request::route()->getName() === "like")
                    class="mainMenuItem mainMenuItemCurrent"
                @else
                    class="mainMenuItem"
                @endif
            >
            <a href="{{route("like")}}">Лайки</a>
            </li>
            <li
                @if (\Request::route()->getName() === "profile")
                class="mainMenuItem mainMenuItemCurrent"
                @else
                class="mainMenuItem"
                @endif
            >
                <a href="{{route("profile")}}">Профиль</a>
            </li>
        </ul>
    </nav>
    </header>
    <div class="global-content">
        @yield("content")
    </div>
    <footer>
        <nav>
        @foreach(\App\Http\Controllers\Controller::footerMenu AS $item=>$label)
        <li
                @if (\Request::route()->getName() == $item)
                    class="mainMenuItem mainMenuItemCurrent"
                @else
                    class="mainMenuItem"
                @endif
                ><a href="{{route($item)}}">{{$label}}</a></li>
        @endforeach
        </nav>
    </footer>
    </body>
</htmp>
