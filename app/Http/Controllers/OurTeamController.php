<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    //
    public function index()
    {
        //
        $employees = Employee::all();
        return view('/AEE_Real/our_team', compact('employees'));
    }
    public function indexForDashboard()
    {
        //
        $employees = Employee::all();
        return view('/AEE_ForDboard/our_team', compact('employees'));
    }
}
