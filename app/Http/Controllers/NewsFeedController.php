<?php

namespace App\Http\Controllers;

use App\NewsFeed;
use App\Project;
use Illuminate\Http\Request;


class NewsFeedController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newsFeeds = NewsFeed::all();
        return view('/AEE_Dashboard/newsFeed.index', compact('newsFeeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $projects = Project::all();
        $newsFeed = new NewsFeed();
        return view('/AEE_Dashboard/newsFeed.create', compact('newsFeed', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        NewsFeed::create($this->validateRequest());
        return redirect('/AEE_Dashboard/newsFeed')->with('message', 'The News has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsFeed  $newsFeed
     * @return \Illuminate\Http\Response
     */
    public function show(NewsFeed $newsFeed)
    {
        //
        return view('AEE_Dashboard.newsFeed.show', compact('newsFeed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsFeed  $newsFeed
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsFeed $newsFeed)
    {
        //
        $projects = Project::all();
        return view('AEE_Dashboard.newsFeed.edit', compact('newsFeed', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsFeed  $newsFeed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsFeed $newsFeed)
    {
        //
        $newsFeed->update($this->validateRequest());
        return redirect('/AEE_Dashboard/newsFeed')->with('message', 'The news feed was edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsFeed  $newsFeed
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsFeed $newsFeed)
    {
        //
        $newsFeed->delete();
        return redirect('/AEE_Dashboard/newsFeed')->with('message', 'The news feed was deleted successfully');
    }

    public function validateRequest(){
        return request()->validate([
            'newsHeader' => 'required|min:2',
            'description' => 'required|min:2',
            'videoLink' => 'sometimes',
            'source' => 'required|min:2',
            'project_id' => "required",
        ]);
}
}
