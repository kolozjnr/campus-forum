<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public $fillable = ['user_id','title','post','file'];

    public function user(){
        $this->belongsTo(User::class);
    }
}
