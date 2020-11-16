<?php

namespace App\Http\Controllers;

use App\NewsFeed;
use Illuminate\Http\Request;

class NewsFeedPageController extends Controller
{
    //
    public function index(){
        $newsFeeds = NewsFeed::all();
        return view('AEE_Real.news_feed', compact('newsFeeds'));
    }

    public function single_feed(NewsFeed $newsFeed){
        return view('AEE_Real.single_news_feed', compact('newsFeed'));
    }
}
