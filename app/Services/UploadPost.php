<?php

namespace App\Services;

use App\Models\Post;
use App\Traits\fileUpload;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\fileUploadRequest;

class UploadPost {
    use fileUpload;

    public function add(array $post): Post {
        $data = Post::create($post);
        // $data = new Post();
        // $userid = Auth::user()->id;
        // if($request->has('file')){
        //     $image = $request->file('file');
        //     $filename = Str::slug($request->input('title')) . '_' . time();
        //     $folder = 'uploads/post';
        //     $filepath = $folder . $name . '.' . $image->getClientOriginalExtension();
        //     $this->fileUpload($image, $folder, 'public', $name);
        //     $data->file = $name. '.' . $image->getClientOriginalExtension();
    
        //     //$data->create();
        // }
        // $data->title = $request->title;
        //     $data->name = $request->name;
        //     $data->file = $request->file;
        //     $data->user_id = $userid;

            //$data->save();

            return $data;
    }
}