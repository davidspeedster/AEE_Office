<?php

namespace App\Http\Controllers;

use App\Images;
use Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProjectMainImage($project){
        if(request()->has('image')){
            $project->update(['image'=>request()->image->store('uploads', 'public')]);
            $image = Image::make(public_path('storage/'. $project->image))->fit(700,700);
            $image->save();
        }
    }

    public function storeProjectImages(Request $request)
    {
        //
        if(! is_dir(public_path('/images/projectImages'))){
            mkdir(public_path('/images/projectImages'), 0777);
        }
        $images = Collection::wrap($request->file('file'));

        $images->each(function($image){
            $baseName = time().'-'.$image->getClientOriginalName();
            $image->move(public_path('/images/projectImages/'),$baseName);
            $image = Image::make(public_path('/images/projectImages/'.$baseName ))->fit(700,700);
            $image->save();

            Images::create([
                'name' => '/images/projectImages/'.$baseName,
                'project_id' => null
            ]);
            return redirect()->back()->with('message', "The picture(s) was added successfully");
        });

    }

    public function storeCertificates(Request $request)
    {

        //
        if(! is_dir(public_path('/images/certificates'))){
            mkdir(public_path('/images/certificates'), 0777);
        }
        $certificates = Collection::wrap($request->file('file'));

        $certificates->each(function($certificate){
            $baseName = time().'-'.$certificate->getClientOriginalName();
            $certificate->move(public_path('/images/certificates'),$baseName);
            $certificate = Image::make(public_path('/images/certificates/'.$baseName ))->fit(500,500);
            $certificate->save();

            Images::create([
                'name' => '/images/certificates/'.$baseName,
                'parentText' => 'certificate'
            ]);
            return redirect()->back()->with('message', "The certificate(s) was added successfully");
        });
    }

    public function storeGroupImage(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'groupImage' => 'required|image|mimes:png,jpeg,gif,svg'
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                        ->withErrors($validator)
                        ->withInput();
        }

        $groupImage = Images::where('parentText','groupImage')->get()->first();
        if($groupImage != null){
            $groupImage->delete();
            $this->destroy($groupImage);
        }

        if(! is_dir(public_path('/images/groupImage'))){
            mkdir(public_path('/images/groupImage'), 0777);
        }
        $image = $request->file('groupImage');
        $baseName = time().'-'.$image->getClientOriginalName();
        $image->move(public_path('/images/groupImage/'),$baseName);
        $image = Image::make(public_path('images/groupImage/'.$baseName ))->fit(1520,1010);
        $image->save();

           $groupImage = Images::create([
                'name' => '/images/groupImage/'.$baseName,
                'parentText' => 'groupImage'
            ]);
            return redirect()->back()->with('message', "The group picture was added successfully")->with('image',$groupImage);
    }

    public function storeLogo(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'logo' => 'required|image|mimes:png,jpeg,gif,svg'
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())
                        ->withErrors($validator)
                        ->with('isActive', 'logo')
                        ->withInput();
        }

        $logo = Images::where('parentText','logo')->get()->first();
        if($logo != null){
            $logo->delete();
            $this->destroy($logo);
        }

        if(! is_dir(public_path('/images/logo'))){
            mkdir(public_path('/images/logo'), 0777);
        }
        $image = $request->file('logo');
        $baseName = time().'-'.$image->getClientOriginalName();
        $image->move(public_path('/images/logo/'),$baseName);
        $image = Image::make(public_path('images/logo/'.$baseName ))->fit(200,60);
        $image->save();

           $logo = Images::create([
                'name' => '/images/logo/'.$baseName,
                'project_id' => 0,
                'parentText' => 'logo'
            ]);
            return redirect()->back()->with('message', "The logo was added successfully")->with('image',$logo)->with('isActive', 'logo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images $image)
    {
        if(is_file(public_path($image->name))){
            File::delete([
                public_path($image->name)
            ]);
        }

        $image->delete();

        return redirect()->back()->with('message', "The picture was deleted successfully");
    }

    public function deleteNullImages(){
        $images = Images::where('project_id', null)->get();
        foreach($images as $image){
            if(is_file(public_path($image->name))){
                File::delete([
                    public_path($image->name)
                ]);
                $image->delete();
            }
        }
    }
}
