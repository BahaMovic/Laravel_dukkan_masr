<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mainPage_ar extends Model
{
    protected $fillable = ['id', 'name', 'email', 'phone', 'address', 'whyUsTitle', 'whyUsDescription', 'ourService', 'ourVision','remember_token', 'created_at', 'updated_at'];

    protected $table = 'mainpage_ar';
}
