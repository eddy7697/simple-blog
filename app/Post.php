<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'postUuid',
        'postTitle',
        'postAuthor',
        'postCategory',
        'postContent'
    ];
}
