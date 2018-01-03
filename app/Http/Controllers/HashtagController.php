<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HashtagController extends Controller
{
  public function index()
  {
      $hashtags = \App\Hashtag::all();
      $hashtagImages = array(
          "lviv_ukraine.jpg",
          "poland.jpg",
          "144.jpg",
          "argentina.jpg",
          "164.jpg",
          "thailand.jpg",
          "150.jpg",
          "roterdam.jpg",
          "slovakia.jpg",
          "amsterdam.jpg",
          "checz.jpg",
          "217.jpg",
          "224.jpg",
          "amsterdam.jpg"
      );

      $responseData = array();
      $imageIndex = 0;
      for($i = 0; $i < count($hashtags); ++$i) {
        $hashtagResponse = new HashtagResponse();
        $hashtagResponse->id = $hashtags[$i]->id; // add id to to response ?
        $hashtagResponse->title = $hashtags[$i]->title;
        $hashtagResponse->title = strtoupper($hashtagResponse->title); // make UPPERCASE to title
        $hashtagResponse->image = $hashtagImages[$imageIndex];
        array_push($responseData, $hashtagResponse);
        $imageIndex = $imageIndex + 1;
        if ($imageIndex >= count($hashtagImages)) {
          $imageIndex = 0;
        }
      }
      return view(
        'hashtags.all',
         ['hashtagResponses' => $responseData]
       );
  }

  public function show($id)
  {
    $hashtag = \App\Hashtag::find($id);
    $hashtagLinks = \App\HashtagLink::where('hashtag_id', $id)->get();
    $linkedStories = array();
    for($i = 0; $i < count($hashtagLinks); ++$i) {
      $story = \App\Story::find($hashtagLinks[$i]->story_id);
      if (strlen($story->description) == 0 && strlen($story->image_url) == 0) {
        continue;
      }
      $linkedStory = new LinkedStory();
      $linkedStory->id = $story->id;
      $linkedStory->title = $story->description;
      // Modify description length
      if (strlen($linkedStory->title) >= 10) {
        $linkedStory->title = substr($linkedStory->title, 0, 10);
        $linkedStory->title = $linkedStory->title."... Read more";
      }
      $linkedStory->image = $story->image_url;
      array_push($linkedStories, $linkedStory);
    }

    $hashtagDetailResponse = new HashtagDetailResponse();
    $hashtagDetailResponse->title = $hashtag->title;
    $hashtagDetailResponse->links = $linkedStories;

    return view('hashtags.single', ['hashtagDetailResponse' => $hashtagDetailResponse]);
  }


}

class HashtagResponse
{
    public $id;
    public $title;
    public $image;
}
class HashtagDetailResponse
{
    public $title;
    public $links;
}
class LinkedStory
{
    public $id;
    public $title;
    public $image;
}
