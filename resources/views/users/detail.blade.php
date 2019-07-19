@extends('layouts.master')
@section('content')
	<div class="detail ml-5">
		<p><b>Họ Và Tên:</b> {{$user->name}} </p>
		<p><b>Ngày Sinh:</b> {{$user->birthday}} </p>
		<p><b>Giới Tính:</b> {{$user->sex == 1 ? 'Nam' : 'Nữ'}}</p>
		<p><b>Email:</b> {{$user->email}}</p>
		<p><b>Địa Chỉ: </b>{{$user->address}}</p>
		<a class="text-info" href="{{route('list-users')}}">Quay lại</a>
	</div>
@endsection