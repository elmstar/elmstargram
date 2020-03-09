@extends('layouts.default')

@section('content')
<div class="profile-main">
<div class="profile-avatar"></div>
<div class="profile-param">
    Профиль пользователя
</div>
<div class="profile-manage">
    <a href="{{route('profileEdit')}}">Редактировать профиль</a>
    <a href="{{--route()--}}">Меню профиля</a>
</div>
</div>
<div class="tab-menu">
<nav>
    <ul>
        <hr/>
        <li
            @if(\Request::route()->getName()=="profile")
            class="mainMenuItem mainMenuItemCurrent"
            @else
            class="mainMenuItem"
            @endif
        ><a href="{{route("profile")}}">Публикации</a></li>
        <li
            @if(\Request::route()->getName()=="profileVideo")
            class="mainMenuItem mainMenuItemCurrent"
            @else
            class="mainMenuItem"
            @endif
        ><a href="{{route("profileVideo")}}">Видео</a></li>
        <li
            @if(\Request::route()->getName()=="profileSaved")
            class="mainMenuItem mainMenuItemCurrent"
            @else
            class="mainMenuItem"
            @endif
        ><a href="{{route("profileSaved")}}">Сохранённое</a></li>
        <li
            @if(\Request::route()->getName()=="profileTagged")
            class="mainMenuItem mainMenuItemCurrent"
            @else
            class="mainMenuItem"
            @endif
        ><a href="{{route("profileTagged")}}">Отметки</a></li>
    </ul>
</nav>
</div>
<div class="smart-tab">
@yield('tab')
</div>
@endsection
