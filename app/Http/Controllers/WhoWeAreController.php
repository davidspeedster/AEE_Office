<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
use App\Timeline;
use App\UploadedFiles;
use App\WebLinks;
use App\WebText;


class WhoWeAreController extends Controller
{
    //
    public function index()
    {
        //
        $vision = WebText::where('parentText', 'vision')->get()->first();
        $missions = WebText::where('parentText', 'mission')->get();
        $values = WebText::where('parentText', 'value')->get();
        $history = WebLinks::where('parentText', 'history')->get()->first();
        $expertises = WebText::where('parentText', 'expertise')->get();
        $certificates = Images::where('parentText', 'certificate')->get();
        $groupImage = Images::where('parentText', 'groupImage')->get()->first();
        $qualityPolicy = UploadedFiles::where('parentText', 'qualityPolicy')->get()->first();
        $riskPolicy = UploadedFiles::where('parentText', 'riskPolicy')->get()->first();
        $timelineEvents = Timeline::orderBy('year', 'asc')->get();
        return view('/AEE_Dashboard/who_we_are.index', compact('groupImage', 'vision', 'missions', 'values', 'history','certificates', 'expertises', 'qualityPolicy', 'riskPolicy', 'timelineEvents'));
        $this->imageController->deleteNullImages();

    }
}
