@extends('profile.profile')
@section('tab')
    <nav>
        <ul>
            <li
                @if (\Request::route()->getName() === "profile")
                class="leftMenuItem leftMenuItemCurrent list100"
                @else
                class="leftMenuItem list100"
                @endif
                >
                <a href="{{route('profile',['nik' => Auth::user()->name])}}"
                >Список</a></li>
            <li @if (\Request::route()->getName() === "profileArticleNew")
                class="leftMenuItem leftMenuItemCurrent list100"
                @else
                class="leftMenuItem list100"
                @endif
            ><a href="{{route('profileArticleNew',['nik' => Auth::user()->name])}}"
                >Новая</a></li>
        </ul>
    </nav>
    @php
    dump($articles);
    @endphp
@endsection
