<?php

namespace App\Http\Controllers;

use App\Images;
use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ImageController;
class ProjectController extends Controller
{

    protected $imageController;
    public function __construct(ImageController $imageController)
    {
        $this->imageController = $imageController;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('/AEE_Dashboard/project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->imageController->deleteNullImages();
        $projectCategories = ProjectCategory::all();
        $project = new Project();
        return view('/AEE_Dashboard/project.create', ['object'=> $project], compact('project', 'projectCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Response $response)
    {
        //

        $project = Project::create($this->validateRequest(null));
        $this->imageController->storeProjectMainImage($project);
        $images = Images::where('project_id', null)->get();
        foreach($images as $image){
            $image->update(['project_id' => $project->id]);
        }
        return redirect('/AEE_Dashboard/project')->with('message','The project was registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        $images=Images::where('project_id', $project->id)->get();
        return view('/AEE_Dashboard/project.show' , compact('project', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $this->imageController->deleteNullImages();
        $projectCategories = ProjectCategory::all();
        $images=Images::where('project_id', $project->id)->get();
        return view('/AEE_Dashboard/project.edit', ['object'=> $project], compact('project', 'images', 'projectCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $project->update($this->validateRequest($project->id));
        $this->imageController->storeProjectMainImage($project);
        $images = Images::where('project_id', null)->get();
        foreach($images as $image){
            $image->update(['project_id' => $project->id]);
        }
         return redirect('/AEE_Dashboard/project')->with('message', "The information was edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $images = Images::where('project_id', $project->id)->get();
        foreach($images as $image){
            if(is_file(public_path($image->name))){
                File::delete([
                    public_path($image->name)
                ]);
                $image->delete();
            }
        }
        if(is_file(public_path('storage/'. $project->image))){
            File::delete([
                public_path('storage/'. $project->image)
            ]);
        }
        $project->delete();
        return redirect('/AEE_Dashboard/project')->with('message', "The project was deleted successfully");
    }
    public function validateRequest(){
        return request()->validate([
            'projectCategoryName' => 'sometimes',
            'projectName' => 'required|min:2',
            'client' => 'required|min:2',
            'location' => 'required',
            'involvement' => 'required|min:2',
            'status' => 'required|min:2',
            'duration' => 'required|min:2',
            'image' => 'sometimes|file|image|max:5000',
            'architect' => 'required|min:2',
            'contractor' => 'required|min:2',
            'description' => 'required|min:2',
            'isForMain' => "required",
            'isFeatured' => "required",
        ]);
    }



}
