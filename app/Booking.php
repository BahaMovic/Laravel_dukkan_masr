<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['id', 'specialty_id', 'doctor_id', 'time', 'message', 'created_at', 'updated_at'];
    protected $table = 'booking';

    public function specialty()
    {
    	return $this->belongsTo('App\Specialty');
    }

    public function doctor()
    {
    	return $this->belongsTo('App\Doctor');
    }
}
