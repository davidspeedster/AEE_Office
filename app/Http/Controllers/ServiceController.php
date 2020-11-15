<?php

namespace App\Http\Controllers;

use App\WebText;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = WebText::where('parentText', 'service')->get();
        return view('/AEE_Dashboard/service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $service = new WebText();
        return view('/AEE_Dashboard/service.create', ['object'=> $service], compact('service'));
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
        WebText::create($this->validateRequest(null));
        return redirect('/AEE_Dashboard/service')->with('message','The new service was registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WebText  $service
     * @return \Illuminate\Http\Response
     */
    public function show(WebText $service)
    {
        //
        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WebText  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(WebText $service)
    {
        //
        return view('/AEE_Dashboard/service.edit', ['object'=> $service], compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebText  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebText $service)
    {
        //
        $service->update($this->validateRequest($service->id));
        return redirect('/AEE_Dashboard/service')->with('message', "The information was edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebText  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebText $service)
    {
        //
        $service->delete();
        return redirect('/AEE_Dashboard/service')->with('message', "The service was deleted successfully");
    }
    public function validateRequest($id){
        return request()->validate([
            'details' => "required|min:2",
            'text' => "required|min:2",
            'parentText' => "required|min:2"
        ]);
    }
}
