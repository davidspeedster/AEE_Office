<?php

namespace App\Http\Controllers;


use App\UploadedFiles;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    //
    public function storeFile(Request $request)
    {
        //

        if ($this->validateFile()->fails()) {
            return redirect(url()->previous())
            ->with(['isActive' => "policies"])
                        ->withErrors($this->validateFile())
                        ->withInput();
        }
        if(! is_dir(public_path('/files'))){
            mkdir(public_path('/files'), 0777);
        }
        $file = UploadedFiles::where('parentText', $request->parentText)->get()->first();
        if($file != null){
            if(is_file(public_path($file->name))){
                File::delete([
                    public_path($file->name)
                ]);
            }
            $file->delete();
        }
            $file = $request->fileUpload;
        $baseName = time().'-'.$file->getClientOriginalName();
        $file->move(public_path('/files'),$baseName);


            UploadedFiles::create([
                'name' => '/files/'.$baseName,
                'parentText' => $request->parentText
            ]);
            return redirect()->back()->with('message', "The file was uploaded successfully")->with(['isActive' => 'policies']);

    }
    public function validateFile(){
        $validator = Validator::make(request()->all(), [
            'fileUpload' => 'required|file',
            'parentText' => "required|min:2"
        ]);

        return $validator;
    }

}
