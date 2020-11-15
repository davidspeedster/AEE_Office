<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Images;
use App\Project;
use App\ProjectCategory;
use App\Timeline;
use App\UploadedFiles;
use App\WebLinks;
use App\WebText;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    //
    public function index()
    {
        //
        $groupImage = Images::where('parentText', 'groupImage')->get()->first();
        $vision = WebText::where('parentText', 'vision')->get()->first();
        $missions = WebText::where('parentText', 'mission')->get();
        $values = WebText::where('parentText', 'value')->get();
        $expertises = WebText::where('parentText', 'expertise')->get();
        $history = WebLinks::where("parentText", "history")->get()->first();
        $qualityPolicy = UploadedFiles::where('parentText', 'qualityPolicy')->get()->first();
        $riskPolicy = UploadedFiles::where('parentText', 'riskPolicy')->get()->first();
        $certificates = Images::where('parentText', 'certificate')->get();
        $years = Timeline::select('year')->groupBy('year')->get()->toArray();
        $timelines = Timeline::all()->groupBy('year');

        return view('/AEE_Real/about', compact('groupImage', 'vision', 'missions', 'values', 'history', 'expertises', 'qualityPolicy', 'riskPolicy', 'certificates', 'years', 'timelines'));
    }
    public function indexForDashboard()
    {
        //

    }
}
