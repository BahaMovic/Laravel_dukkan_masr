@extends('admin.layouts.mainPage')

@section('header')

@endsection
@section('content')
<div class="container">

	<div class="table-responsive">
<table class="table table-condensed" style="width:80%; float: right;">

 <tr>

 	<th>ID</th>
 	<th>الاسم</th>
 	<th>الايميل</th>
 	<th>موبيل</th>
 	<th>التخصص</th>
 	<th>العنوان</th>
 	<th>الاجازات</th>
 	<th>الجنس</th>
 	<th>العمر</th>
 	<th>تعديل</th>
 </tr>
 @foreach($data as $doctor)
<!-- 'id', 'name', 'email', 'phone', 'specialty_id', 'address', 'holidays', 'gender', 'age', 'remember_token', 'created_at', 'updated_at' -->
 <tr>
 	<td>{{$doctor->id}}</td>
 	<td>{{$doctor->name}}</td>
 	<td>{{$doctor->email}}</td>
 	<td>{{$doctor->phone}}</td>
 	<td>{{$doctor->specialty->title}}</td>
 	<td>{{$doctor->address}}</td>
 	<td>{{$doctor->holidays}}</td>
 	<td>{{$doctor->gender}}</td>
 	<td>{{$doctor->age}}</td>
 <td>
    <a href="{{url('admin/delete/doctor/'.$doctor->id)}}">مسح</a>
 / <a href="{{url('admin/edit/doctor/'.$doctor->id)}}">تعديل</a>
</td>
 	
 </tr>


 @endforeach
</table>

</div>
</div>
@endsection

@section('title')
عرض الاطباء
@endsection

@section('description')
عرض جميع الاطباء / <a href="{{url('admin/add/doctor')}}">اضافة طبيب جديد</a>
@endsection