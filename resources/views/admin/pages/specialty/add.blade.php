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
<form class="form-controller" method="post" action="{{url('admin/add/specialty')}}" style="padding: 20px; margin: 10px">
{!! csrf_field() !!}

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">اسم التخصص</span>
  <input type="text" class="form-control" name="title" placeholder="Title" aria-describedby="basic-addon1">
</div>

<input type="submit" class="btn btn-primary container" value="تعديل" style="width: 100px;margin-left: 40%">

</form>
@endsection

@section('title')
الاطباء
@endsection

@section('description')
اضافة طبيب جديد
@endsection