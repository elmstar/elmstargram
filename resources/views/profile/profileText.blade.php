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
        <table>
            <thead>
            <th>
                Номер
            </th>
            <th>
                Дата публикации
            </th>
            <th>
                Название
            </th>
            <th>
                Автор
            </th>
            <th>Действия</th>
            </thead>
            <tbody>
            @foreach ($articles AS $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->created_at}}</td>
                <td><a href="{{route('profileArticleView',['nik'=>Auth::user()->name, 'id'=>$article->id])}}">{{$article->title}}</a></td>
                <td>{{$article->author->name}}</td>
                <td><a href="{{route('profileArticleEdit',['nik'=>Auth::user()->name, 'id'=>$article->id])}}">Редактировать</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
