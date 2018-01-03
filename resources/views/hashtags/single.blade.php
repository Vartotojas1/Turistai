@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>#{{ $hashtagDetailResponse->title }}</h1>
    <div class="row">
      @foreach ($hashtagDetailResponse->links as $response)
        <div class="col-md-4">
          <div class="thumbnail" style="">
            <a href="/story/{{ $response->id }}">
              <div style="background-image: url('{{ $response->image }}');
                background-repeat: no-repeat; background-position: center;
                height:100px;"></div>
              <div class="caption">
                <p>{{ $response->title }}</p>
              </div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
