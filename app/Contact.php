<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $fillable = ['id', 'title', 'address', 'phone', 'fax', 'email', 'remember_token', 'created_at', 'updated_at'];
   protected $table='contact';
}
