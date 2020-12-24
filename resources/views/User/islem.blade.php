@extends('Layout.fixe-page')
@section('content')
    <br><br>
    <div>
        <center>
            <table class="tablist">
                <caption >Kullancılar Listesi</caption>
                <thead>
                <tr>
                    <th >ID</th>
                    <th >Ad</th>
                    <th >Soyad</th>
                    <th >Güncelle</th>
                    <th >Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td><a href="/guncelle/{{$user->id}}">Güncelle</a></td>
                        <td><a href="/sil/{{$user->id}}">Sil</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </center>
    </div>

@endsection
