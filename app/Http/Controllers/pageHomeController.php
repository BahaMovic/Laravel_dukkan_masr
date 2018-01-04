<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mainPage;
use App\News;
use App\Specialty;
use App\Doctor;
use App\Booking;
class pageHomeController extends Controller
{
    public function showHomePageInArabic()
    {
    	$data =  mainPage::get()->last();
    	$news = News::orderBy('id','desc')->take(3)->get();
    	$spec = Specialty::get();
    	return view('pages.index',compact('data','news','spec'));
    }
    public function getDoctors(Request $req)
    {
    	$data = Doctor::where('specialty_id','=',$req->id)->get();
    	if(sizeof($data) == 0)
    	{
    		echo "<option>Empty</option>";
    	}
    	foreach ($data as $rw) {
    		echo "<option value=".$rw->id.">".$rw->name."</option>";
    	}
    }

    public function getDays(Request $req)
    {
    	$daysOfDoc = Doctor::select('holidays')->where('id','=',$req['id'])->get()->last()->getOriginal();
    	$s = $daysOfDoc['holidays'];
    	$daysGetOriginal = explode(";",$s );
    	$arr[0] = "sun";
    	$arr[1] = "mon";
    	$arr[2] = "tue";
    	$arr[3] = "wed";
    	$arr[4] = "Thu";
    	$arr[5] = "Fri ";
    	$arr[6] = "Sat ";
    	echo "string";
    	$date = date("Y-m-d");
    	$str = $s;
    	$in = 0;
				for($i = 0 ; $i < 7 ; $i++)
    	{
    		if($daysGetOriginal[$i] == 0)
    		{
    			
		    	$day = $i;
		    	$dayofweek = date('w', strtotime($date));

				$result    = date('Y-m-d', strtotime(($day - $dayofweek).' day', strtotime($date)));
				
    			$str .= "<option value=".$arr[$i]."--".$result.">".$arr[$i]."--".$result."</option>";
    		}
    	}
    	echo $str;
    }

    public function addbooking(Request $req)
    {
        Booking::create([
            'specialty_id'=>$req['specialty_id'],
            'doctor_id'=>$req['doctor_id'],
            'time'=>$req['time'],
            'message'=>$req['message']
        ]);
        return redirect('/');
    }

}
