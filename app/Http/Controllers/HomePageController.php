<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Project;
use App\ProjectCategory;
use App\WebLinks;
use App\WebText;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function index()
    {
        //
        $services = WebText::where('parentText', 'service')->get();
        $employees = Employee::all();
        $main_slider = Project::where('isForMain', 'true')->get();
        $projectCategories = ProjectCategory::all();
        $allProjects = Project::all();
        $projects = [];
        foreach($projectCategories as $categories){
            $projects[$categories['projectCategoryName']] = [
                Project::where('projectCategoryName', $categories['projectCategoryName'])->get()->toArray()
            ];
        }

        $partners = WebLinks::where('parentText', 'partner')->get();
        $registeredMemberships = WebLinks::where('parentText', 'registeredMembership')->get();
        return view('/AEE_Real/index', compact('employees', 'main_slider', 'projectCategories', 'projects', 'partners', 'registeredMemberships', 'allProjects', 'services'));
    }
    public function indexForDashboard()
    {
        //
        $employees = Employee::all();
        return view('/AEE_ForDBoard/index', compact('employees'));
    }

}
