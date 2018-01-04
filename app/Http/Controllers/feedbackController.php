<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
class feedbackController extends Controller
{
    public function index()
    {
    	$data= Feedback::get();
    	return view('admin.pages.feedback.index',compact('data'));
    }

    public function delete($id)
    {
    	Feedback::where('id','=',$id)->delete();
    	return redirect('admin/show/messages');
    }
}
