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
 	<th>تعديل</th>

 </tr>
 @foreach($data as $spc)
<!-- 'id', 'name', 'email', 'phone', 'specialty_id', 'address', 'holidays', 'gender', 'age', 'remember_token', 'created_at', 'updated_at' -->
 <tr>
 	<td>{{$spc->id}}</td>
 	<td>{{$spc->title}}</td>
 	
 <td>
    <a href="{{url('admin/delete/specialty/'.$spc->id)}}">مسح</a>
 / <a href="{{url('admin/edit/specialty/'.$spc->id)}}">تعديل</a>
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
عرض جميع التخصصات /  <a href="{{url('admin/add/specialty')}}">اضافة تخصص جديد</a>
@endsection