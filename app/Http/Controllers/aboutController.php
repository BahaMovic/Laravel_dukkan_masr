<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\About_ar;
class aboutController extends Controller
{
    function edit()
    {
    	$data = About::get()->last();
    	return view('admin.pages.about.index',compact('data'));
    }

    function store(Request $data)
    {
    	About::create([
    		'description'=>$data['description']
    	]);
    	return redirect(url('admin/edit/about/en'));
    }

    function edit_ar()
    {
    	$data = About_ar::get()->last();
    	return view('admin.pages.about.index_ar',compact('data'));
    }

    function store_ar(Request $data)
    {
    	About_ar::create([
    		'description'=>$data['description']
    	]);
    	return redirect(url('admin/edit/about/ar'));
    }
}
