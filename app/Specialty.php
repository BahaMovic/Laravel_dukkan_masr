<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable = ['id', 'title', 'remember_token', 'created_at', 'updated_at'];
    protected $table = 'specialty';
}
