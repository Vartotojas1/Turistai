@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <img src="{{ $response->story->image_url }}">
                <div class=story>
                  {{ $response->story->description }}
                </div>
            </div>
            <div class="row" style="margin-left: 20px; margin-right: 20px;">
            @foreach ($response->images as $thumbnail)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="{{ $thumbnail->picture }}" onclick="openModal();currentSlide({{ $thumbnail->index }})" class="hover-shadow">
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Images used to open the lightbox -->


<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()" style="padding-top: 50px;">X</span>
  <div class="modal-content">

    @foreach ($response->images as $images)
    <div class="mySlides">
      <div class="numbertext">{{ $images->index }} / {{ $images->count }}</div>
      <img src="{{ $images->source }}" style="width:100%">
    </div>
    @endforeach

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption">Hello</p>
    </div>
    <!-- Thumbnail image controls -->
    @foreach ($response->images as $images)
    <div class="column">
      <img class="demo" src="{{ $images->picture }}" onclick="currentSlide({{ $images->index }})">
    </div>
    @endforeach
  </div>
</div>
<script src="{{ asset('js/lightbox.js') }}"></script>
@endsection
