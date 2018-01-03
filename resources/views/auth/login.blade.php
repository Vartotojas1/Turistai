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
        <h5>Prisijungimo forma</h5>
        <form class="col s12" action="{{route('login')}}" method="post">

          {{csrf_field()}}

          <div class="row">
            <div class="input-field col s2">
              <input id="email" name="email" type="text" class="validate">
              <label for="email">El.paštas</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s2">
              <input id="password" name="password" type="password" class="validate">
              <label for="password">Slaptažodis</label>
            </div>
          </div>

          <button class="btn waves-effect waves-light" type="submit">Submit
          </button>

        </form>
      </div>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/materialize.js"></script>
    <script>
      $(".button-collapse").sideNav();
    </script>
  </body>
</html>
@endsection
