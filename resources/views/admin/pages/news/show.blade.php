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


@endsection

@section('title')
الاخبار
@endsection

@section('description')
عرض خبر {{$data->title}}
@endsection