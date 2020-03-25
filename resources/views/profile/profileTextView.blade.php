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
        <div>
            <h1>{{$article->title}}</h1>
            <p>Автор: {{$article->author->name}}"</p>
        </div>
        <div>
            <p>{{$article->text}}</p>
        </div>
</div>
    <div class="clear"></div>
    <div class="comments">
        <h3>Комментарии</h3>
        @php
        //dump($article->comments()->get());
        @endphp

        @foreach ($article->comments AS $comment)
            {{dump($comment)}}
        @endforeach
        <form action="{{route('profileArticleView',['nik' => Auth::user()->name,'id'=>$article->id])}}" method="POST">
            {{ csrf_field() }}
            <textarea name="articleComment"></textarea>
            <input type="submit" value="Отправить">
        </form>
    </div>
@endsection
