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
<form class="form-controller" method="post" action="{{url('admin/edit/about/ar')}}" style="padding: 20px; margin: 10px">
{!! csrf_field() !!}

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Description</span>
  <textarea type="text" class="form-control" name="description" placeholder="Description" aria-describedby="basic-addon1" rows="15">{{$data->description}}</textarea> 
</div>



<input type="submit" class="btn btn-primary container" value="تعديل" style="width: 100px;margin-left: 40%">

</form>

@endsection

@section('title')
 صفحة من نحن بالانجليزي / 
 <a href="{{url('/admin/edit/about/en')}}">تعديل بالانجليزي</a>
@endsection

@section('description')
تعديل الصفحة الرئيسية
@endsection