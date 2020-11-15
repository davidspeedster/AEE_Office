<?php

namespace App\Http\Controllers;

use App\Timeline;
use Validator;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    //

    public function storeTimeline(Request $request)
    {
        //
        if ($this->validateTimeline()->fails()) {
            return redirect(url()->previous())
            ->with(['isActive' => 'timeline'])
                        ->withErrors($this->validateTimeline())
                        ->withInput();
        }
            Timeline::create([
                'details' => $request->details,
                'year' => $request->year,
                'month' => $request->month
            ]);
       return redirect()->back()->with('message', 'The event has been registered successfully')->with(['isActive' => 'timeline']);
    }

    public function editTimeline(Timeline $timeline)
    {
        //
        return redirect()->back()->with(['isActive' => 'timeline', 'isEditTimeline' => true, 'edit_timeline'=> $timeline ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebText  $webText
     * @return \Illuminate\Http\Response
     */


    public function updateTimeline(Request $request, Timeline $timeline)
    {
        //

        if ($this->validateTimeline()->fails()) {
            return redirect(url()->previous())
            ->with(['isActive' => 'timeline'])
                        ->withErrors($this->validateTimeline())
                        ->withInput();
        }
        $timeline->update([
            'details' => $request->details,
            'month' => $request->month,
            'year' => $request->year
        ]);
        return redirect("/AEE_Dashboard/who_we_are")->with('message', "The timeline event was edited successfully")->with(['isActive' => 'timeline']);
    }

    public function destroyTimeline(Timeline $timeline)
    {
        //
        $timeline->delete();
        return redirect("/AEE_Dashboard/who_we_are")->with('message', "The timeline event was deleted successfully")->with(['isActive' => 'timeline']);
    }

    public function validateTimeline(){
        $validator = Validator::make(request()->all(), [
            'details' => "required|min:2",
            'month' => "required|min:2",
            'year' => "required|min:2"
        ]);

       return $validator;
    }
}
