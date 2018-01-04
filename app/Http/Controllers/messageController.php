<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class messageController extends Controller
{
      public function index()
    {
    	$data= Message::get();
    	return view('admin.pages.message.index',compact('data'));
    }

     public function delete($id)
    {
    	Message::where('id','=',$id)->delete();
    	return redirect('admin/show/feedbacks');
    }
}
