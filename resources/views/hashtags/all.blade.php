@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @foreach ($hashtagResponses as $response)
      <div class="col-md-3">
        <div class="thumbnail">
          <a href="/hashtag/{{ $response->id }}">
            <img src="../hashtagimages/{{ $response->image }}" />
            <div class="caption">
              <p>#{{ $response->title }}</p>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection
