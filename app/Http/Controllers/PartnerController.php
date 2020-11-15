<?php

namespace App\Http\Controllers;

use App\WebLinks;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partners = WebLinks::where('parentText', 'partner')->get();
        return view('/AEE_Dashboard/partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $partner = new WebLinks();
        return view('/AEE_Dashboard/partner.create', ['object'=> $partner], compact('partner'));
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
        return redirect('/AEE_Dashboard/partner')->with('message','The partner was registered successfully');
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
     * @param  \App\WebLinks  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(WebLinks $partner)
    {
        //
        return view('/AEE_Dashboard/partner.edit', ['object'=> $partner], compact('partner'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebLinks  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebLinks $partner)
    {
        //
        $partner->update($this->validateRequest($partner->id));
         return redirect('/AEE_Dashboard/partner')->with('message', "The information was edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebLinks  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebLinks $partner)
    {
        //
        $partner->delete();
        return redirect('/AEE_Dashboard/partner')->with('message', "The partner was deleted successfully");
    }

    public function validateRequest($id){
        return request()->validate([
            'details' => "required|min:2",
            'websiteLink' => "required|min:2|url",
            'parentText' => "required|min:2"
        ]);
    }
}
