<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mainPage;
use App\mainPage_ar;
class homepageController extends Controller
{
   
    function edit()
    {
    	$response = mainPage::get()->last();
    	return view('admin.pages.homepage.index',compact('response'));
    }

    function store(Request $data)
    {
    	//'id', 'name', 'email', 'phone', 'address', 'whyUsTitle', 'whyUsDescription', 'ourService', 'ourVision', 'password', 'remember_token', 'created_at', 'updated_at'
    	mainPage::create([
    		'name'=>$data['name'],
    		'email'=>$data['email'],
    		'phone'=>$data['phone'],
    		'address'=>$data['address'],
    		'whyUsTitle'=>$data['whyUsTitle'],
    		'whyUsDescription'=>$data['whyUsDescription'],
    		'ourService'=>$data['ourService'],
    		'ourVision'=>$data['ourVision'],
    	]);

    	return redirect('/admin/edit/en');
    }


     function edit_ar()
    {
    	$response = mainPage_ar::get()->last();
    	return view('admin.pages.homepage.index_ar',compact('response'));
    }

    function store_ar(Request $data)
    {
    	//'id', 'name', 'email', 'phone', 'address', 'whyUsTitle', 'whyUsDescription', 'ourService', 'ourVision', 'password', 'remember_token', 'created_at', 'updated_at'
    	mainPage_ar::create([
    		'name'=>$data['name'],
    		'email'=>$data['email'],
    		'phone'=>$data['phone'],
    		'address'=>$data['address'],
    		'whyUsTitle'=>$data['whyUsTitle'],
    		'whyUsDescription'=>$data['whyUsDescription'],
    		'ourService'=>$data['ourService'],
    		'ourVision'=>$data['ourVision'],
    	]);

    	return redirect('/admin/edit/ar');
    }
}
