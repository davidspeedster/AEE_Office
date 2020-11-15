<?php

namespace App\Http\Controllers;

use App\Images;
use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;

class ProjectsPageController extends Controller
{
    //
    public function index()
    {
        //
        $projectCategories = ProjectCategory::all();
        $allProjects = Project::all();
        $projects = [];
        foreach($projectCategories as $categories){
            $projects[$categories['projectCategoryName']] = [
                Project::where('projectCategoryName', $categories['projectCategoryName'])->get()->toArray()
            ];
        }

        return view('/AEE_Real/projects', compact('projectCategories', 'projects', 'allProjects'));
    }


    public function single_view(Project $project)
    {
        //
        $project_images = Images::where('project_id', $project->id)->get();
        return view('/AEE_Real/single_project_view', compact('project', 'project_images'));
    }


    public function indexForDashboard()
    {
        //
        return view('/AEE_ForDBoard/projects', compact(''));
    }
}
