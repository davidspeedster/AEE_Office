<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Str;
use App\WebLinks;
use Illuminate\Http\Request;


class HistoryController extends Controller
{
    //
    public function storeHistory(Request $request)
    {
        //



        if ($this->validateHistory()->fails()) {
            return redirect(url()->previous())
            ->with(['isActive' => $request->parentText])
                        ->withErrors($this->validateHistory())
                        ->withInput();
        }
            WebLinks::create([
                'details' => $request->details,
                'websiteLink' => $request->websiteLink,
                'parentText' => $request->parentText
            ]);
       return redirect()->back()->with('message', 'The text(s) have been registered successfully')->with(['isActive' => $request->parentText]);
    }

    public function updateHistory(Request $request)
    {
        //

        if ($this->validateHistory()->fails()) {
            return redirect(url()->previous())
            ->with(['isActive' => $request->parentText])
                        ->withErrors($this->validateHistory())
                        ->withInput();
        }
        $weblink = WebLinks::where("parentText", "history")->get()->first();
        $weblink->update([
            'details' => $request->details,
            'websiteLink' => $request->websiteLink
            ]);
            return redirect("/AEE_Dashboard/who_we_are")->with('message', "The information was edited successfully")->with(['isActive' => $weblink->parentText]);
    }


    public function validateHistory(){
        $validator = Validator::make(request()->all(), [
            'details' => "required|min:2|",
            'websiteLink' => [
                'required',
                'min:2',
            function ($attribute, $value, $fail) {
                if (!Str::contains($value, '<iframe')&&Str::contains($value, 'src')&&Str::contains($value, '</iframe>')) {
                    $fail($attribute.' is invalid.');
                }
            }
        ],
            'parentText' => "required|min:2"
        ]);

        return $validator;
    }
}
