@extends('Layout.fixe-page')
@section('content')
  <div>
      <h2 style="text-align: center; font-family: Cambria; font-size: 40px;">Hoşgeldiniz</h2>
      <div>
          <a href="kayit">
              <figure id="ekle">
                  <img src="{{asset('image/ekle.png')}}" alt="eklemek" height="180"/>
                  <figcaption>Kullancı Ekle</figcaption>
              </figure>
          </a>
      </div>
      <div>
          <a href="/listeleme">
          <figure id="list">
              <img src="{{asset('image/list.png')}}" alt="listele" height="180"/>
              <figcaption>Kullancılar Listesi</figcaption>
          </figure>
          </a>
      </div>

  <div STYLE="clear: left"></div>
  </div>

@endsection
