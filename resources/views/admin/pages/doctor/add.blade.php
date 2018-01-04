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
<form class="form-controller" method="post" action="{{url('admin/add/doctor')}}" style="padding: 20px; margin: 10px">
{!! csrf_field() !!}

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Name</span>
  <input type="text" class="form-control" name="name" placeholder="Name" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Email</span>
  <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Phone</span>
  <input type="text" class="form-control" name="phone" placeholder="Phone" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Address</span>
  <input type="text" class="form-control" name="address" placeholder="Address" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Age</span>
  <input type="number" class="form-control" name="age" placeholder="Age" aria-describedby="basic-addon1" >
</div>
<div class="input-group">
	<span class="input-group-addon" id="basic-addon1">Holidays</span>

<label class="checkbox-inline" style="margin-left: 15px"><input name="sun" type="checkbox" value="1">الأحد</label>
<label class="checkbox-inline"><input name="mon" type="checkbox" value="1">الاثنين</label>
<label class="checkbox-inline"><input name="tue" type="checkbox" value="1">الثلاثاء</label>
<label class="checkbox-inline"><input name="wed" type="checkbox" value="1">الأربعاء</label>
<label class="checkbox-inline"><input name="thu" type="checkbox" value="1">الخميس</label>
<label class="checkbox-inline"><input name="fri" type="checkbox" value="1">الجمعة</label>
<label class="checkbox-inline"><input name="sat" type="checkbox" value="0">السبت</label>
</div>
<div class="input-group">
	<span class="input-group-addon" id="basic-addon1">Gender</span>
<div class="radio" style="margin-left: 10px">
      <label><input type="radio" name="gender" value="1">ذكر</label>
    </div>
    <div class="radio" style="margin-left: 10px">
      <label><input type="radio" name="gender" value="0">أنثي</label>
    </div>
</div>
<div class="input-group">
	<span class="input-group-addon" id="basic-addon1">Specialty</span>
	<select name="specialty_id" class="form-control">
		@foreach($data as $spc)
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