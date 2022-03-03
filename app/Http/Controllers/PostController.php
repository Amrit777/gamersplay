<?php

namespace App\Http\Controllers;

use App\Constants\Constants;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $rules = [
            'content' => 'required_without:postPhotos|nullable|string|max:1024',
            'postPhotos.*' => 'required_without:content|mimes:jpeg,jpg,x-png,png',
            'postPhotos' => 'max:4',
            // 'postVideo' => 'mimes:mp4',
            // 'postMusic' => 'mimes:mp3',
        ];
        $messages = array(
            'content.required' => 'Content is required.',
            'postPhotos.max' => 'Only 4 files are allowed.'
        );
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $error = [
                'error' => $validator->errors()->first()
            ];
            return redirect()->to(url()->previous() . '#profile')->with($error);
        }

        $status = [];
        DB::beginTransaction();
        try {
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
                // if ($request->hasFile('postVideo')) {
                //     $uploadedVideo = Image::saveImage($request->file('postVideo'), 'post-media', $model->id);
                //     $video = new Image();
                //     $video->name = $request->file('postVideo')->getClientOriginalName();
                //     $video->type_id = "2";
                //     $video->file_name =  $uploadedVideo;
                //     $video->extension = $request->file('postVideo')->getClientOriginalExtension();
                //     if ($user) {
                //         $video->user()->associate($user);
                //     }
                //     $model->images()->save($video);
                // }
                // if ($request->hasFile('postMusic')) {
                //     $uploadedMusic = Image::saveImage($request->file('postMusic'), 'post-media', $model->id);
                //     $music = new Image();
                //     $music->name = $request->file('postMusic')->getClientOriginalName();
                //     $music->type_id = "3";
                //     $music->file_name =  $uploadedMusic;
                //     $music->extension = $request->file('postMusic')->getClientOriginalExtension();
                //     if ($user) {
                //         $music->user()->associate($user);
                //     }
                //     $model->images()->save($music);
                // }
            }
            DB::commit();
            $status = ['success' => 'Post is created.'];
        } catch (\Illuminate\Database\QueryException $exception) {
            DB::rollback();
            $error = implode(" | ", $exception->errorInfo);
            $status = ['error' => $error];
        }
        return redirect()->to(url()->previous() . '#profile')->with($status);
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

    public function likePost(Request $request)
    {
        $user = Auth::user();
        $msg = null;
        $rules = [
            'id' => 'required',
            'liked' => 'required'
        ];
        $messages = array(
            'id.required' => 'Something went wrong',
            'liked.required' => 'Something went wrong'
        );
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $error = [
                'error' => $validator->errors()->first()
            ];
            return $this->error($error);
        }
        DB::beginTransaction();
        try {
            $model = Post::where("id", $request->id)->first();
            if (empty($model)) {
                return $this->failed();
            }

            // check if exists if not create
            $likeModel = Like::updateOrCreate(
                [
                    'likeable_id' => $model->id,
                    'likeable_type' => get_class($model),
                    'user_id' => $user->id
                ],
                ['state_id' => $request->liked]
            );
            DB::commit();
            if ($likeModel->state_id == 0) {
                $msg = "Post is unliked!!!";
            } else {
                $msg = "Post is liked!!!";
            }
            return $this->success(['message' => $msg, "liked" => $likeModel->state_id, 'likes_count' => $model->likes->count()]);
        } catch (\Illuminate\Database\QueryException $exception) {
            DB::rollback();
            $error = implode(" | ", $exception->errorInfo);
            return $this->error($error);
        }
    }

    public function addComment(Request $request)
    {
        $user = Auth::user();
        $rules = [
            'body' => "required|string",
            'commentable_id' => "required"
        ];
        $messages = array(
            'body.required' => 'Please add content to your comment',
            'commentable_id.required' => 'Something went wrong'
        );
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $error = [
                'error' => $validator->errors()->first()
            ];
            return $this->error($error);
        }
        $data = [];
        // try {
        $model = Post::where("id", $request->commentable_id)->first();
        if (empty($model)) {
            return $this->failed();
        }
        $comment = new Comment();
        $comment->body = $request->body;
        $comment->user_id = $user->id;
        $model->comments()->save($comment);

        return $this->success();
        // } catch (\Illuminate\Database\QueryException $exception) {
        //     return $this->error($exception->errorInfo);
        // }
    }
}
