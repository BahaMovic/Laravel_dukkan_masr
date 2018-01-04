@extends('admin.layouts.mainPage')

@section('header')

@endsection
@section('content')
<style type="text/css">
	form div
	{
		margin: 20px;
	}
</style>
<form class="form-controller" method="post" action="{{url('admin/edit/contact/en')}}" style="padding: 20px; margin: 10px">
{!! csrf_field() !!}

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Title</span>
  <input type="text" class="form-control" name="title" placeholder="Title" aria-describedby="basic-addon1" value="{{$data->title}}">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Address</span>
  <input type="text" class="form-control" name="address" placeholder="address" aria-describedby="basic-addon1" value="{{$data->address}}">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Phone</span>
  <input type="text" class="form-control" name="phone" placeholder="phone" aria-describedby="basic-addon1" value="{{$data->phone}}">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Fax</span>
  <input type="text" class="form-control" name="fax" placeholder="Fax" aria-describedby="basic-addon1" value="{{$data->fax}}">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Email</span>
  <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1" value="{{$data->email}}">
</div>


<input type="submit" class="btn btn-primary container" value="تعديل" style="width: 100px;margin-left: 40%">

</form>

@endsection

@section('title')
 صفحة من نحن بالانجليزي / 
 <a href="{{url('/admin/edit/about/ar')}}">تعديل بالعربي</a>
@endsection

@section('description')
تعديل الصفحة الرئيسية
@endsection