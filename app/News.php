<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['id', 'image', 'title', 'description', 'remember_token', 'created_at', 'updated_at'];
    protected $table = 'news';
}
