@extends('layouts.app')

@section('content')
  <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Kontaktai
                  <div>
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                  </div>
                </div>
               <div class="panel-body">
                 <div class="col-md-6 col-md-offset-6">
                 <form action="/action_page.php" target="_blank">
                   <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                     <div class="w3-half">
                       <input class="w3-input w3-border" type="text" placeholder="Vardas" required name="Name">
                     </div>
                     <div class="w3-half">
                       <input class="w3-input w3-border" type="text" placeholder="El. paštas" required name="Email">
                     </div>
                   </div>
                   <input class="w3-input w3-border" type="textarea" placeholder="Žinutė" required name="Message">
                   <button class="w3-button w3-black w3-section w3-right" type="submit">Siųsti</button>
                 </form>
               </div>
               <div class="col-md-6 col-md-offset-1">
                 <p>cia bus tekstas</p>
               </div>
             </div>
          </div>
    </div>

@endsection
