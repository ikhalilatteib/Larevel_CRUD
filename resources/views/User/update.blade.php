@extends('Layout.fixe-page')
@section('content')
    <h1 class="alpha">Bilgi Güncelleme</h1>
    <form action="/update/{{$user->id}}" method="POST">
        <div class="tabo">
            <br>
            <center>
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <label>Ad</label><br>
                            <input type="text" name="name" value="{{$user->name}}" required>
                        </td>
                        <td>
                            <label>Soyad</label><br>
                            <input type="text" name="last_name" value="{{$user->last_name}}" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label><br>
                            <input type="email" name="email" value="{{$user->email}}" required>
                        </td>
                        <td>
                            <label>Password</label><br>
                            <input type="password" name="password" value="{{$user->password}}" required>
                        </td>
                    </tr>
                    </tbody></table><br>
                @csrf
                <button type="submit">Submit</button>
            </center>
        </div>
    </form>
@endsection
