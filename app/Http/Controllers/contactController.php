<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class contactController extends Controller
{
     function edit()
    {
    	$data = Contact::get()->last();
    	return view('admin.pages.contact.index',compact('data'));
    }

    function store(Request $data)
    {
    	Contact::create([
    		'title'=>$data['title'],
    		'address'=>$data['address'],
    		'phone'=>$data['phone'],
    		'fax'=>$data['fax'],
    		'email'=>$data['email']
    	]);
    	return redirect(url('admin/edit/contact/en'));
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
