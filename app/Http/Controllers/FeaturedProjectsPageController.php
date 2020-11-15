<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;
use App\Project;
use App\ProjectCategory;

class FeaturedProjectsPageController extends Controller
{
    //
    public function index(){
        $featuredProjects = Project::where('isFeatured', 'true')->get();
        return view("AEE_Real.featuredProjects", compact('featuredProjects'));
    }

    public function single_view(ProjectCategory $projectCategory){
        $projects = Project::where('projectCategoryName', $projectCategory->projectCategoryName)->get();
        $project_images = [];
        foreach($projects as $project){
            $project_images[$project['id']] = [
                Images::where('project_id', $project['id'])->get()->toArray()
            ];
        }
        return view("AEE_Real.singleCategoryView", compact('projects', 'projectCategory', 'project_images'));
    }
}
