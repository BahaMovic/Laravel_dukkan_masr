<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_ar extends Model
{
    protected $fillable = ['id','description'];
    protected $table = 'about_ar';
}
