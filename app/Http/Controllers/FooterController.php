<?php

namespace App\Http\Controllers;

use App\Images;
use App\LocationInfo;
use Illuminate\Support\Str;
use App\SocialMediaAccount;
use Illuminate\Http\Request;
use Validator;

class FooterController extends Controller
{
    //
    public function index(){
        $logo = Images::where('parentText', 'logo')->get()->first();
        $location_info = LocationInfo::all()->first();;
        $accounts = SocialMediaAccount::all()->first();
        return view('AEE_Dashboard/footer.index', compact('accounts', 'logo', 'location_info'));
    }


    public function storeAccounts(Request $request)
    {
        //
        if ($this->validateAccounts()->fails()) {
            return redirect(url()->previous())
                        ->withErrors($this->validateAccounts())
                        ->withInput();
        }

        $accounts = SocialMediaAccount::all()->first();
        if($accounts!=null){
            $this->updateAccounts($request, $accounts);
            return redirect('/AEE_Dashboard/footer')->with('message', 'The information was edited successfully');
        }else{
            SocialMediaAccount::create([
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
                'instagram' => $request->instagram

            ]);
            return redirect()->back()->with('message', 'The text(s) have been registered successfully');
        }

    }

    public function updateAccounts(Request $request, SocialMediaAccount $accounts)
    {
        //
        $accounts->update([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram
            ]);

    }

    public function validateAccounts(){
        $validator = Validator::make(request()->all(), [
            'facebook' => 'sometimes|nullable|min:2|url',
            'twitter' => 'sometimes|nullable|min:2|url',
            'linkedin' => 'sometimes|nullable|min:2|url',
            'youtube' => 'sometimes|nullable|min:2|url',
            'instagram' => 'sometimes|nullable|min:2|url'
        ]);

        return $validator;
    }

    public function storeLocationInfo(Request $request)
    {
        //

        if ($this->validateLocationInfo()->fails()) {
            return redirect(url()->previous())
                        ->with(['isActive' => 'location'])
                        ->withErrors($this->validateLocationInfo())
                        ->withInput();
        }

        $locationInfo = LocationInfo::all()->first();
        if($locationInfo!=null){

            $this->updateLocationInfo($request, $locationInfo);
            return redirect('/AEE_Dashboard/footer')->with('message', 'The information was edited successfully') ->with(['isActive' => 'location']);
        }else{
            LocationInfo::create([
            'location_info' => $request->location_info,
            'po_box_info' => $request->po_box_info,
            'telephone_numbers' => $request->telephone_numbers,
            'fax_info' => $request->fax_info,
            'email' => $request->email,
            'google_map_link' => $request->google_map_link

            ]);
       return redirect()->back()->with('message', 'The text(s) have been registered successfully') ->with(['isActive' => 'location']);
        }

    }

    public function updateLocationInfo(Request $request, LocationInfo $locationInfo)
    {
        //

        $locationInfo->update([
            'location_info' => $request->location_info,
            'po_box_info' => $request->po_box_info,
            'telephone_numbers' => $request->telephone_numbers,
            'fax_info' => $request->fax_info,
            'email' => $request->email,
            'google_map_link' => $request->google_map_link
            ]);

    }

    public function validateLocationInfo(){
        $validator = Validator::make(request()->all(), [
            'location_info' => 'sometimes|nullable|min:2|',
            'po_box_info' => 'sometimes|nullable|min:2|',
            'telephone_numbers' => 'sometimes|nullable|min:2|',
            'fax_info' => 'sometimes|nullable|min:2|',
            'email' => 'sometimes|nullable|min:2|',
            'google_map_link' => [
                'required',
                'min:2',
                'nullable',
            function ($attribute, $value, $fail) {
                if (!Str::contains($value, '<iframe')&&Str::contains($value, 'src')&&Str::contains($value, '</iframe>')) {
                    $fail($attribute.' is invalid.');
                }
            }
        ],
        ]);

        return $validator;
    }
}
