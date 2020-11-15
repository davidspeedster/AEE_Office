<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class FeaturedProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $featuredProjects = Project::where('isFeatured', 'true')->get();
        $unfeaturedProjects = Project::where('isFeatured', 'false')->get();
        return view('/AEE_Dashboard/featuredProjects.index', compact('unfeaturedProjects', 'featuredProjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Project $project)
    {
        //
        $project->update(['isFeatured'=>'true']);
        return redirect()->back()->with('message', 'The project has been successfully added to the list of featured projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove(Project $project)
    {
        //
        $project->update(['isFeatured'=>'false']);
        return redirect()->back()->with('message', 'The project has been successfully removed from the list of featured projects');
    }
}
