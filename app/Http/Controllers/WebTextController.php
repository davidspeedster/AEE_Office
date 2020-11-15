<?php

namespace App\Http\Controllers;

use App\Images;
use Intervention\Image\Facades\Image;
use Validator;
use App\WebText;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class WebTextController extends Controller
{

    /**
     * Store a newly created web text in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($this->validateText()->fails()) {
            return redirect(url()->previous())
            ->with(['isActive' => $request->parentText])
                        ->withErrors($this->validateText())
                        ->withInput();
        }

        $texts = Collection::wrap($request->text);
        $texts->each(function($text, $request){
            WebText::create([
                'text' => $text,
                'parentText' => request()->parentText
            ]);
        });
       return redirect()->back()->with('message', 'The text(s) have been registered successfully')->with(['isActive' => $request->parentText]);
    }

/**
     * Store a newly created history in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */







    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WebText  $webText
     * @return \Illuminate\Http\Response
     */
    public function edit(WebText $webText)
    {
        //
        return redirect()->back()->with(['isActive' => $webText->parentText, 'isEdit' => true, 'edit_webText'=> $webText ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebText  $webText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebText $webText)
    {
        //
        if ($this->validateText()->fails()) {
            return redirect(url()->previous())
            ->with(['isActive' => $request->parentText])
                        ->withErrors($this->validateText())
                        ->withInput();
        }

        $webText->update([
            'text' => $request->text,
            'parentText' => $request->parentText
        ]);
        return redirect("/AEE_Dashboard/who_we_are")->with('message', "The information was edited successfully")->with(['isActive' => $webText->parentText]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebText  $webText
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebText $webText)
    {
        //
        $webText->delete();
        return redirect("/AEE_Dashboard/who_we_are")->with('message', "The text(s) was deleted successfully")->with(['isActive' => $webText->parentText]);
    }



    public function validateText(){
        $validator = Validator::make(request()->all(), [
            'text' => 'required',
            'text.*' => 'required|min:2',
            'parentText' => 'required',
        ]);

        return $validator;
    }




}
