<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // use Image;

    // public function resizeImagePost($file)
    // {
    //     // $request->validate([
    //     //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     // ]);

    //     $image = $file;
    //     $input['imagename'] = time() . '.' . $image->extension();

    //     $destinationPath = public_path('/thumbnail');
    //     $img = Image::make($image->path());
    //     $img->resize(100, 100, function ($constraint) {
    //         $constraint->aspectRatio();
    //     })->save($destinationPath . '/' . $input['imagename']);

    //     $destinationPath = public_path('/images');
    //     $image->move($destinationPath, $input['imagename']);

    //     return back()
    //         ->with('success', 'Image Upload successful')
    //         ->with('imageName', $input['imagename']);

    //     ///////////////////////
    //     $image = $request->file('image');
    //     $extension = $image->getClientOriginalExtension(); //Getting extension
    //     $originalname = $image->getClientOriginalName(); //Getting original name
    //     $path = $image->move('uploads/media/', $originalname); //This will store in customize folder
    //     $imgsizes = $path->getSize();
    //     $data = getimagesize($path);
    //     $width = $data[0];
    //     $height = $data[1];
    //     $mimetype = $image->getClientMimeType(); //Get MIME type

    //     //Start Store in Database
    //     $picture = new mediaLibrary();
    //     $picture->mime = $mimetype;
    //     $picture->imgsize = $imgsizes;
    //     $picture->original_filename = $originalname;
    //     $picture->extension = $extension;
    //     $picture->width = $width;
    //     $picture->height = $height;
    //     $picture->filename = $path;
    //     $picture->save();
    //     //End Store
    //     return redirect()->route('media.index');
    // }
}
