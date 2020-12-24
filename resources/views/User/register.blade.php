@extends('Layout.fixe-page')
@section('content')
<h1 class="alpha"> Kayit Ol</h1>
<form action="/kaydet" method="POST">
  <div class="tabo">
      <br>
      <center>
      <table>
          <tbody>
          <tr>
              <td>
                  <label>Ad</label><br>
                  <input type="text" name="name" >
              </td>
              <td>
                  <label>Soyad</label><br>
                  <input type="text" name="last_name" required><br>
              </td>
          </tr>
          <tr>
              <td>
                  <label>Email</label><br>
                  <input type="email" name="email">
              </td>
             <td>
                 <label>Password</label><br>
                 <input type="password" name="password">
             </td>
          </tr>
          </tbody></table><br>
          @csrf
          <button type="submit">Submit</button>
      </center>
  </div>

</form>
@endsection
