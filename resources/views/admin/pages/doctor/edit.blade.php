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
<form class="form-controller" method="post" action="{{url('admin/edit/doctor/'.$data['id'])}}" style="padding: 20px; margin: 10px">
{!! csrf_field() !!}
{!! method_field('PATCH') !!}
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Name</span>
  <input type="text" class="form-control" name="name" value="{{$data['name']}}" placeholder="Name" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Email</span>
  <input type="email" class="form-control" name="email" value="{{$data->email}}" placeholder="Email" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Phone</span>
  <input type="text" class="form-control" name="phone" value="{{$data->phone}}" placeholder="Phone" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Address</span>
  <input type="text" class="form-control" name="address" value="{{$data->address}}" placeholder="Address" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Age</span>
  <input type="number" class="form-control" name="age" value="{{$data->age}}" placeholder="Age" aria-describedby="basic-addon1" >
</div>
<div class="input-group">
	<span class="input-group-addon" id="basic-addon1">Holidays <br>{{$data->holidays}}</span>


<label class="checkbox-inline"><input @if(strpos($data->holidays, 'احد') !== false) checked @endif name="sun" type="checkbox" value="1">الأحد</label>
<label class="checkbox-inline"><input @if(strpos($data->holidays, 'اثنين') !== false) checked @endif name="mon" type="checkbox" value="1">الاثنين</label>
<label class="checkbox-inline"><input @if(strpos($data->holidays, 'ثلاث') !== false) checked @endif name="tue" type="checkbox" value="1">الثلاثاء</label>
<label class="checkbox-inline"><input @if(strpos($data->holidays, 'اربعاء') !== false) checked @endif name="wed" type="checkbox" value="1">الأربعاء</label>
<label class="checkbox-inline"><input @if(strpos($data->holidays, 'خميس') !== false) checked @endif name="thu" type="checkbox" value="1">الخميس</label>
<label class="checkbox-inline"><input @if(strpos($data->holidays, 'جمعة') !== false) checked @endif name="fri" type="checkbox" value="1">الجمعة</label>
<label class="checkbox-inline" @if(strpos($data->holidays, 'سبت') !== false) checked @endif style="margin-left: 15px"><input name="sat" type="checkbox" value="1">السبت</label>

</div>

<div class="input-group">
	<span class="input-group-addon" id="basic-addon1">Specialty</span>
	<select name="specialty_id" value="{{$data->specialty_id}}"  class="form-control">
		@foreach($datas as $spc)
		<option value="{{$spc->id}}">{{$spc->title}}</option>
		@endforeach
	</select>
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