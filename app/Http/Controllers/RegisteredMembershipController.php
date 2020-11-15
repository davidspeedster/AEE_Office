<?php

namespace App\Http\Controllers;

use App\WebLinks;
use Illuminate\Http\Request;

class RegisteredMembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registeredMemberships = WebLinks::where('parentText', 'registeredMembership')->get();
        return view('/AEE_Dashboard/registeredMembership.index', compact('registeredMemberships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $registeredMembership = new WebLinks();
        return view('/AEE_Dashboard/registeredMembership.create', ['object'=> $registeredMembership], compact('registeredMembership'));
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
        WebLinks::create($this->validateRequest(null));
        return redirect('/AEE_Dashboard/registeredMembership')->with('message','The new membership was registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WebLinks  $registeredMembership
     * @return \Illuminate\Http\Response
     */
    public function show(WebLinks $registeredMembership)
    {
        //
        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WebLinks  $registeredMembership
     * @return \Illuminate\Http\Response
     */
    public function edit(WebLinks $registeredMembership)
    {
        //
        return view('/AEE_Dashboard/registeredMembership.edit', ['object'=> $registeredMembership], compact('registeredMembership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebLinks  $registeredMembership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebLinks $registeredMembership)
    {
        //
        $registeredMembership->update($this->validateRequest($registeredMembership->id));
        return redirect('/AEE_Dashboard/registeredMembership')->with('message', "The information was edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebLinks  $registeredMembership
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebLinks $registeredMembership)
    {
        //
        $registeredMembership->delete();
        return redirect('/AEE_Dashboard/registeredMembership')->with('message', "The membership was deleted successfully");
    }
    public function validateRequest($id){
        return request()->validate([
            'details' => "required|min:2",
            'websiteLink' => "required|min:2|url",
            'parentText' => "required|min:2"
        ]);
    }
}
