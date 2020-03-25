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
<div class="profile-edit-content">
    <H2>Новая публикация</H2>
    <form action="{{route('profileArticleEdit',['nik' => Auth::user()->name,'id'=>$article->id])}}" method="POST">
        <div>
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$article->id}}">
            <input type="hidden" name="author_id" value="{{$article->author_id}}">
            <input name="title" class="article-title" value="{{$article->title}}">
        </div>
        <div>
            <textarea name="text">{{$article->text}}</textarea>
        </div>
        <div>
            <input name="tags">
        </div>
        <div>
            <input type="submit" value="Сохранить">
        </div>
    </form>
</div>
    <div class="clear"></div>
@endsection
