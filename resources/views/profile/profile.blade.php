@extends('layouts.default')

@section('content')
<div class="profile-main">
<div class="profile-avatar"></div>
<div class="profile-param">
    <h1>Ваш профиль</h1>
    <table>
        <tr>
            <td>Логин:</td><td>{{request()->user()->name}}</td>
        </tr>
        <tr>
            <td>e-mail:</td><td>{{request()->user()->email}}</td>
        </tr>
    </table>
</div>
<div class="profile-manage">
    <a href="{{route('profileEdit',['nik' => Auth::user()->name])}}">Редактировать профиль</a>
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
        ><a href="{{route("profile",['nik' => Auth::user()->name])}}">Публикации</a></li>
        <li
            @if(\Request::route()->getName()=="profilePhoto")
            class="mainMenuItem mainMenuItemCurrent"
            @else
            class="mainMenuItem"
            @endif
        ><a href="{{route("profilePhoto",['nik' => Auth::user()->name])}}">Фото</a></li>
        <li
            @if(\Request::route()->getName()=="profileVideo")
            class="mainMenuItem mainMenuItemCurrent"
            @else
            class="mainMenuItem"
            @endif
        ><a href="{{route("profileVideo",['nik' => Auth::user()->name])}}">Видео</a></li>
        <li
            @if(\Request::route()->getName()=="profileSaved")
            class="mainMenuItem mainMenuItemCurrent"
            @else
            class="mainMenuItem"
            @endif
        ><a href="{{route("profileSaved",['nik' => Auth::user()->name])}}">Сохранённое</a></li>
        <li
            @if(\Request::route()->getName()=="profileTagged")
            class="mainMenuItem mainMenuItemCurrent"
            @else
            class="mainMenuItem"
            @endif
        ><a href="{{route("profileTagged",['nik' => Auth::user()->name])}}">Отметки</a></li>
    </ul>
</nav>
</div>
<div class="smart-tab">
@yield('tab')
</div>
@endsection
