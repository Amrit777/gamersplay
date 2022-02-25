<?php

namespace App\Http\Controllers;

use App\Constants\Constants;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createPost(Request $request)
    {
        $request->validate([
            'content' => 'max:1024|string',
            'postPhotos.*' => 'mimes:jpeg,jpg,x-png,png',
            'postPhotos' => 'max:4',
            'postVideo' => 'mimes:mp4',
            'postMusic' => 'mimes:mp3',
        ]);
        $status = [];
        // DB::beginTransaction();
        // try {
            $user = Auth::user()->id;
            $model = new Post();
            $model->content = $request->content;
            $model->service_id = $request->service_id;
            $model->user_id = $user;
            $model->state_id = Constants::STATE_ACTIVE;
            if ($model->save()) {
                if ($request->hasFile('postPhotos')) {
                    foreach ($request->file('postPhotos') as $file) {
                        $uploadedImage = Image::saveImage($file, 'post-media', $model->id);
                        $image = new Image();
                        $image->name = $file->getClientOriginalName();
                        $image->type_id = "1";
                        $image->file_name =  $uploadedImage;
                        $image->extension = $file->getClientOriginalExtension();
                        if ($user) {
                            $image->user()->associate($user);
                        }
                        $model->images()->save($image);
                    }
                }
                if ($request->hasFile('postVideo')) {
                    $uploadedVideo = Image::saveImage($request->file('postVideo'), 'post-media', $model->id);
                    $video = new Image();
                    $video->name = $request->file('postVideo')->getClientOriginalName();
                    $video->type_id = "2";
                    $video->file_name =  $uploadedVideo;
                    $video->extension = $request->file('postVideo')->getClientOriginalExtension();
                    if ($user) {
                        $video->user()->associate($user);
                    }
                    $model->images()->save($video);
                }
                if ($request->hasFile('postMusic')) {
                    $uploadedMusic = Image::saveImage($request->file('postMusic'), 'post-media', $model->id);
                    $music = new Image();
                    $music->name = $request->file('postMusic')->getClientOriginalName();
                    $music->type_id = "3";
                    $music->file_name =  $uploadedMusic;
                    $music->extension = $request->file('postMusic')->getClientOriginalExtension();
                    if ($user) {
                        $music->user()->associate($user);
                    }
                    $model->images()->save($music);
                }
            }
            // DB::commit();
            $status = ['success' => 'Post is created.'];
        // } catch (\Illuminate\Database\QueryException $exception) {
        //     DB::rollback();
        //     $error = implode(" | ",$exception->errorInfo);
        //     $status = ['error' => $error];
        // }
        return redirect()->to(url()->previous() . '#profile')->with($status);

        // return redirect()->back()->with($status);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
