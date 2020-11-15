<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::all();
        return view('/AEE_Dashboard/employee.index', compact('employees'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $employee = new Employee();
        return view('/AEE_Dashboard/employee.create', ['object'=> $employee], compact('employee'));
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
        $employee = Employee::create($this->validateRequest(null));
        $this->storeImage($employee);
        return redirect('/AEE_Dashboard/employee')->with('message','The employee was registered successfully');
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
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        return view('/AEE_Dashboard/employee.edit', ['object'=> $employee], compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $employee->update($this->validateRequest($employee->id));
         $this->storeImage($employee);
         return redirect('/AEE_Dashboard/employee')->with('message', "The information was edited successfully");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
        $image_path = public_path().'\storage\\'.$employee->image;
        if(File::exists($image_path)){
            File::delete($image_path);
        }
        $employee->delete();
        return redirect('/AEE_Dashboard/employee')->with('message', "The employee was deleted successfully");
    }

    public function validateRequest(){
        return request()->validate([
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'phone' => "required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10",
            'email' => "required|email",
            'position' => 'required',
            'image' => 'sometimes|file|image|max:5000',
        ]);
    }
    public function storeImage($employee){
        if(request()->has('image')){
            $employee->update(['image'=>request()->image->store('uploads', 'public')]);
            $image = Image::make(public_path('storage/'. $employee->image))->fit(300,300);
            $image->save();
        }
}
}

