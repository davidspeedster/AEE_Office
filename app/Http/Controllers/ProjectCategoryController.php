<?php

namespace App\Http\Controllers;

use App\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projectCategories = ProjectCategory::all();
        return view('/AEE_Dashboard/projectCategory.index', compact('projectCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $projectCategory = new ProjectCategory();
        return view('/AEE_Dashboard/projectCategory.create', ['object'=> $projectCategory], compact('projectCategory'));
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
        ProjectCategory::create($this->validateRequest(null));
        return redirect('/AEE_Dashboard/projectCategory')->with('message','The project category was registered successfully');
    }

/**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        abort('404');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectCategory $projectCategory)
    {
        //
        return view('/AEE_Dashboard/projectCategory.edit', ['object'=> $projectCategory], compact('projectCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectCategory $projectCategory)
    {
        //
        $projectCategory->update($this->validateRequest($projectCategory->id));
         return redirect('/AEE_Dashboard/projectCategory')->with('message', "The information was edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectCategory $projectCategory)
    {
        //
        $projectCategory->delete();
        return redirect('/AEE_Dashboard/projectCategory')->with('message', "The project category was deleted successfully");
    }

    public function validateRequest($id){
        return request()->validate([
            'projectCategoryName' => "required|min:2|unique:project_categories,projectCategoryName,$id",
        ]);
    }
}
