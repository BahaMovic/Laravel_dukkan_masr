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
<form class="form-controller" method="post" action="{{url('admin/edit/specialty/'.$data['id'])}}" style="padding: 20px; margin: 10px">
{!! csrf_field() !!}
{!! method_field('PATCH') !!}
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">اسم التخصص</span>
  <input type="text" class="form-control" name="title" value="{{$data['title']}}" placeholder="Name" aria-describedby="basic-addon1">
</div>



<input type="submit" class="btn btn-primary container" value="تعديل" style="width: 100px;margin-left: 40%">

</form>
@endsection

@section('title')
التخصصات
@endsection

@section('description')
تعديل تخصص
@endsection