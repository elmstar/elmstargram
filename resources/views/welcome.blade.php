@extends('layouts.default')
    @section('content')
        <div>
            <div class="content">
                <div>
                    <p>Стартовая страница. Если не авторизован - переносит на страницу регистрации</p>
                    <p>Пока здесь просто ссылки на регистрацию и аутентификацию</p>
                    <table>
                        <tr><td><a href="{{route('registration')}}">Регистрация</a></td></tr>
                        <tr><td><a href="{{route('login')}}">Аутентификация</a></td></tr>
                    </table>
                </div>
            </div>
        </div>
    @endsection
