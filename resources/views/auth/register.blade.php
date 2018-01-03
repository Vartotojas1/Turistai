@extends('layouts.app')

@section('content')

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/materialize.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  </head>
  <body>



      <div class="row">
        <h5>Registracijos forma</h5>
        <form class="col s5" action="{{route('register')}}" method="post">

          {{csrf_field()}}

          @if($errors->any())
            <div>
              @foreach($errors->all() as $error)
                {{$error}} <br>

                

              @endforeach
            </div>

          @endif

          <div class="row">
            <div class="input-field col s6">
              <input id="name" name="name" type="text" class="validate">
              <label for="name">Vardas</label>
            </div>
          </div>


          <div class="row">
            <div class="input-field col s6">
              <input id="email" name="email" type="text" class="validate">
              <label for="email">El.paštas</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="password" name="password" type="password" class="validate">
              <label for="password">Slaptažodis</label>
            </div>
          </div>

            <div class="row">
            <div class="input-field col s6">
              <input id="password2" name="password_confirmation" type="password" class="validate">
              <label for="password2">Pakartokite slaptažodį</label>
            </div>
          </div>


          <button class="btn waves-effect waves-light" type="submit">Submit
          </button>

        </form>
      </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/materialize.js"></script>

  </body>
</html>
@endsection
