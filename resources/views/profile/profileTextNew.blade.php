@extends('profile.profile')
@section('tab')
    <div class="leftMenu">
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
    </div>
<div class="">
    <H2>Новая публикация</H2>
    <form action="{{route('profileArticleNew',['nik' => Auth::user()->name])}}" method="POST">
        <div>
            {{ csrf_field() }}
            <input name="title" class="article-title">
        </div>
        <div>
            <textarea name="text"></textarea>
        </div>
        <div>
            <input name="tags">
        </div>
        <div>
            <input type="submit" value="Сохранить">
        </div>
    </form>
</div>
@endsection
