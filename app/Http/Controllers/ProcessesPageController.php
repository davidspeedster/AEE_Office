<?php

namespace App\Http\Controllers;
use App\UploadedFiles;
use Illuminate\Http\Request;

class ProcessesPageController extends Controller
{
    //
    public function index(){
    $qualityPolicy = UploadedFiles::where('parentText', 'qualityPolicy')->get()->first();
    $riskPolicy = UploadedFiles::where('parentText', 'riskPolicy')->get()->first();

    return view('/AEE_Real/processes', compact('qualityPolicy', 'riskPolicy'));
    }
}
