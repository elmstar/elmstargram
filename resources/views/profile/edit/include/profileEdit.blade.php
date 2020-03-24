<div class="profile-edit-content">
    <form action="{{route('profileEdit',['nik' => $user->name])}}" method="POST">
        <input type="hidden" name="id" value="{{$user->id}}">
    <table>
        <tr>
            <td>Имя</td><td><input type="text" name="name" value="{{$user->name}}" </td>
        </tr>
        <tr>
            <td>e-mail</td><td><input type="text" name="email" value="{{$user->email}}"></td>
        </tr>
        <tr><td>{{ csrf_field() }}</td><td><input type="submit" value="ok"></td></tr>
    </table>
    </form>
</div>
