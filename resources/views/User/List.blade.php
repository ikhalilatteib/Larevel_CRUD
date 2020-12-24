@extends('Layout.fixe-page')
    @section('content')
        <br>
        <div>
            <center>
            <table class="tablist">
                <caption >Kullancılar Listesi</caption>
                <thead>
                <tr>
                    <th >ID</th>
                    <th >Ad</th>
                    <th >Soyad</th>
                    <th >Email</th>
                    <th >Update Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </center>
        </div>
        <br>
        <div>
            <h2>Değişiklik yapmak için <a href="/islem">Tiklayın</a></h2>
        </div>
        <br><br><br>
    @endsection
