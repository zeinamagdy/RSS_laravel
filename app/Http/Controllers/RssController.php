<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Feeds;

class RssController extends Controller
{
    public function demo() {
    $feed = Feeds::make('http://www.youm7.com/rss/SectionRss?SectionID=297');
    $data = array(
      'title'     => $feed->get_title(),
      'permalink' => $feed->get_permalink(),
      'items'     => $feed->get_items(),
    );

    // return View::make('feed', $data);

     return view('feed', compact('data'));
  }
}
