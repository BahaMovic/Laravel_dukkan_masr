@extends('admin.layouts.mainPage')

@section('header')
<style type="text/css">
	form div
	{
		margin: 20px;
	}
</style>
@endsection
@section('content')
{{ Form::open( [ 'url' => 'admin/edit/news/'.$data->id, 'method' => 'patch', 'files' => true ,'style'=>"padding: 20px; margin: 10px"] ) }} 
{!! csrf_field() !!}

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">عنوان الخبر</span>
  <input type="text" class="form-control" name="title" placeholder="Title" aria-describedby="basic-addon1" value="{{$data->title}}">
</div>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">صورة الخبر</span>
  <input type="file" class="form-control" name="image" placeholder="Title" aria-describedby="basic-addon1" value="{{$data->image}}">
  <img src="{{url($data->image)}}" style="width: 40px">
</div>


 <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">وصف الخبر</span>
 <textarea name="description" class="form-control" aria-describedby="basic-addon1" placeholder="Description">{{$data->description}}</textarea>
</div>
<input type="submit" class="btn btn-primary container" value="تعديل" style="width: 100px;margin-left: 40%">

{!! Form::close() !!}
@endsection

@section('title')
التخصصات
@endsection

@section('description')
تعديل تخصص
@endsection