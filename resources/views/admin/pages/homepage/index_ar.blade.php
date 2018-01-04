@extends('admin.layouts.mainPage')

@section('content')
<style type="text/css">
	form div
	{
		margin: 20px;
	}
</style>
<form class="form-controller" method="post" action="{{url('admin/edit/ar')}}" style="padding: 20px; margin: 10px">
{!! csrf_field() !!}
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Name</span>
  <input type="text" class="form-control" name="name" placeholder="website name" aria-describedby="basic-addon1" value="{{$response->name}}">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Email</span>
  <input type="email" class="form-control" name='email' placeholder="Emain" aria-describedby="basic-addon1" value="{{$response->email}}">
</div>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Phone</span>
  <input type="text" value="{{$response->phone}}" class="form-control" name="phone" placeholder="Phone number" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Address</span>
  <input type="text" value="{{$response->address}}" class="form-control" name="address" placeholder="Address" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Why Us Title</span>
  <input type="text" value="{{$response->whyUsTitle}}" class="form-control" name="whyUsTitle" placeholder="Why Us Title" aria-describedby="basic-addon1">
</div>


<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Why Us Description</span>
  <textarea type="text"  class="form-control" name="whyUsDescription" placeholder="Why Us Description" aria-describedby="basic-addon1">{{$response->whyUsDescription}}</textarea>
</div>



<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Our Service</span>
  <textarea type="text" class="form-control" name="ourService" placeholder="Our Service" aria-describedby="basic-addon1">{{$response->ourService}}</textarea> 
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Our Vision</span>
  <textarea type="text" class="form-control" name="ourVision" placeholder="Our Vision" aria-describedby="basic-addon1">{{$response->ourVision}}</textarea> 
</div>

<input type="submit" class="btn btn-primary container" value="تعديل" style="width: 100px;margin-left: 40%">
</form>
@endsection

@section('title')
 الصفحة الرئيسية بالعربي / 
 <a href="{{url('admin/edit/en')}}">تعديل بالانجليزي</a>
@endsection

@section('description')
تعديل الصفحة الرئيسية
@endsection