<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable =['id', 'fullname', 'email', 'phone', 'feedback', 'remember_token', 'created_at', 'updated_at'];
    protected $table = 'feedback';
}
