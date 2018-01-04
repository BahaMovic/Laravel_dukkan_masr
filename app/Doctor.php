<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable =['id', 'name', 'email', 'phone', 'specialty_id', 'address', 'holidays', 'gender', 'age', 'remember_token', 'created_at', 'updated_at'];

    protected $table = 'doctor';

    public function getGenderAttribute($value)
    {
    	if($value == "1")
    	{
    		return "ذكر";
    	}else
    	{
    		return "انثي";
    	}
    }

    public function specialty()
    {
    	return $this->belongsTo('App\Specialty');
    }

    public function getHolidaysAttribute($value)
    {
        $arr= explode(";", $value);
        $days  = ['احد','اثنين','ثلاث','اربعاء','خميس','جمعة','سبت'];
        $str = "";
        for ($i = 0 ; $i < sizeof($arr) ; $i++)
        {
            if($arr[$i] == "1")
            {
                $str .= $days[$i].",";
            }
        }
        return $str;
    }

   
}
