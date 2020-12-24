@extends('Layout.fixe-page')
@section('content')
    <center>
        <figure>
            <img src="{{asset('image/basari.png')}}" alt="Başaralı Kayıt" width="320" height="90%">
            <figcaption>
                <h1 style=" font-family: Crimson Text; font-size:40px;">İşleminiz Başarıyla Tamamlaandı</h1>
            </figcaption>
        </figure>
    </center>
   <?php
       header("Refresh: 5; URL=/anasayfa");
   ?>
@endsection
