<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{

  public function index()
  {
      $posts = \App\Story::all();
      return view('stories.all', ['stories' => $posts]);
  }

  public function show($id)
  {
    $story = \App\Story::find($id);
    $response = new StoryDetailResponse();
    $response->id = $story->id;
    $response->story = $story;

    $images = array();
    $imageLinks = \App\StoryPhotoLink::where('story_post_id', $story->post_id)->get();
    $imageCount = count($imageLinks);
    for($i = 0; $i < $imageCount; ++$i) {
      $storyImageId = $imageLinks[$i]->story_image_id;
      $storyImage = \App\StoryPhoto::where('image_id', $storyImageId)->first();
      $storyImage->index = $i + 1;
      $storyImage->count = $imageCount;
      array_push($images, $storyImage);
    }
    $response->images = $images;
    return view('stories.single', ['response' => $response]);
  }

}

class StoryDetailResponse
{
    public $id;
    public $story;
    public $images;
}
