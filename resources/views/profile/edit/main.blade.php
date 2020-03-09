@extends('layouts.default')
@section('content')
    <div class="profile-edit-tree">
        <ul>
            <li>Основные настройки</li>
            <li>Смена пароля</li>
            <li>PUSH-уведомления</li>
            <li>Конфиденциальность</li>
            <li>Устройства,которые подключались</li>
        </ul>
    </div>
    <div class="profile-edit-content">
        @yield('profile-edit-content')
    </div>
@endsection
