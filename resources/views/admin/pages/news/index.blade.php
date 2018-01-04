@extends('admin.layouts.mainPage')

@section('header')

@endsection
@section('content')
<div class="container">
	<div class="table-responsive" style="margin-left: 80px">

 @foreach($data as $spc)
<!-- 'id', 'name', 'email', 'phone', 'specialty_id', 'address', 'holidays', 'gender', 'age', 'remember_token', 'created_at', 'updated_at' -->
<div class="col-sm-4 pull-right">
<div class="row">
  <div class="col-sm-12">
    <div class="thumbnail">
      <img src="{{url($spc->image)}}" alt="..." style="max-width: 242px ; max-height: 200px ; min-height: 199px">
      <div class="caption">
        <h3>{{$spc->title}}</h3>
        <p>{{substr($spc->description,0,100)}} ...</p>
        <p><a href="{{url('admin/delete/news/'.$spc->id)}}" onclick="return  confirm('do you want to delete Y/N')" class="btn btn-primary" role="button">مسح</a> <a href="{{url('admin/edit/news/'.$spc->id)}}" class="btn btn-default" role="button">تعديل</a></p>
        <button type="button" class="btn btn-primary" data-toggle="modal"  role="button" data-target="#myModal{{$spc->id}}">
  اقرأ المزيد
</button>

<!-- Modal -->
<div class="modal fade" id="myModal{{$spc->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-body">
        <div class="row">
  <div class="col-sm-12">
    <div class="thumbnail">
      <img src="{{url($spc->image)}}" alt="..." style="max-width: 342px ; max-height: 300px ; min-height: 299px">
      <div class="caption">
        <h3>{{$spc->title}}</h3>
        <p>{{$spc->description}}</p>
        <p><a href="{{url('admin/delete/news/'.$spc->id)}}" onclick="return  confirm('do you want to delete Y/N')" class="btn btn-primary" role="button">مسح</a> <a href="{{url('admin/edit/news/'.$spc->id)}}" class="btn btn-default" role="button">تعديل</a></p>
      </div>
  </div>
</div>
</div>
      </div>

    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Button trigger modal -->
</div>
 @endforeach

</div>

@endsection

@section('title')
عرض الاطباء
@endsection

@section('description')
عرض جميع الاخبار /  <a href="{{url('admin/add/news')}}">اضافة خبر جديد</a>
@endsection