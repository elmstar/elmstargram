@extends('layouts.default')
@section('content')
    <div class="profile-edit-tree">
        <div class="leftMenu">
            <ul>
                <li
                    @if (\Request::route()->getName() === "profileEdit")
                    class="leftMenuItem leftMenuItemCurrent"
                    @else
                    class="leftMenuItem"
                    @endif
                ><a href="{{route('profileEdit',['nik' => Auth::user()->name])}}">Основные настройки</a></li>
                <li
                    @if (\Request::route()->getName() === "profileEditChange")
                    class="leftMenuItem leftMenuItemCurrent"
                    @else
                    class="leftMenuItem"
                    @endif
                ><a href="{{route('profileEditChange',['nik' => Auth::user()->name])}}">Смена пароля</a></li>
                <li
                    @if (\Request::route()->getName() === "profileEditPush")
                    class="leftMenuItem leftMenuItemCurrent"
                    @else
                    class="leftMenuItem"
                    @endif
                ><a href="{{route('profileEditPush',['nik' => Auth::user()->name])}}">PUSH-уведомления</a></li>
                <li
                    @if (\Request::route()->getName() === "profileEditSecure")
                    class="leftMenuItem leftMenuItemCurrent"
                    @else
                    class="leftMenuItem"
                    @endif
                ><a href="{{route('profileEditSecure',['nik' => Auth::user()->name])}}">Конфиденциальность</a></li>
                <li
                    @if (\Request::route()->getName() === "profileEditActive")
                    class="leftMenuItem leftMenuItemCurrent"
                    @else
                    class="leftMenuItem"
                    @endif
                ><a href="{{route('profileEditActive',['nik' => Auth::user()->name])}}">Устройства,которые подключались</a></li>
            </ul>
        </div>
    </div>
    <div class="profile-edit-content">
        @include('profile.edit.include.'.\Request::route()->getName())
    </div>
@endsection
