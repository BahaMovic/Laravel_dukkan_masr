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
 	<th>رقم</th>
 	<th>التعليق</th>

 	<th>مسح</th>
 	
 </tr>
 @foreach($data as $doctor)
<!-- 'id', 'name', 'email', 'phone', 'specialty_id', 'address', 'holidays', 'gender', 'age', 'remember_token', 'created_at', 'updated_at' -->
 <tr>
 	<td>{{$doctor->id}}</td>
 	<td>{{$doctor->name}}</td>
 	<td>{{$doctor->email}}</td>
 	<td>{{$doctor->phone}}</td>
 	<td>{{$doctor->content}}</td>
 	
 <td>
    <a href="{{url('admin/delete/message/'.$doctor->id)}}" onclick="return  confirm('do you want to delete Y/N')">مسح</a>
 
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