<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Traits\fileUpload;
use App\Services\UploadPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\fileUploadRequest;

class PostController extends Controller
{
    use fileUpload;
    // public function __construct(uploadPost $cartService)
    // {
    //     $this->uploadPost = $cartService;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create-post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\UploadPost  $UploadPost
     * @return \Illuminate\Http\Response
     */
    public function store(fileUploadRequest $request)
    {
        //$uploadPost->store($request->validate());
        (new UploadPost())->add($request->validated());
        return redirect()->route('post');

       // public function store(fileUploadRequest $request): Post {
            // $data = new Post();
            // $userid = Auth::user()->id;
            // if($request->has('file')){
            //     $image = $request->file('file');
            //     $filename = Str::slug($request->input('title')) . '_' . time();
            //     $folder = 'uploads/post';
            //     $filepath = $folder . $name . '.' . $image->getClientOriginalExtension();
            //     $this->fileUpload($image, $folder, 'public', $name);
            //     $data->file = $name. '.' . $image->getClientOriginalExtension();
            //     $data->create();
            // }
            // $data->title = $request->title;
            //     $data->post = $request->post;
            //     $data->file = $request->file;
            //     $data->user_id = $userid;
    
            //     //$data->save();
    
            //     return $data;
        
        // $this->uploadPost->post($request->validate());
        //return back()->with('success', 'Item added to cart');
        //(new uploadPost())->post($request->validate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
