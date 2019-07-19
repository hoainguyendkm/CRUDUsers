@extends('layouts.master')
@section('content')
	<div class="content">
		<div class="title">
			<h4>Danh Sách Users</h4>
			<span class="btn-new"><a href="{{route('create')}}">Thêm Mới <i class="fas fa-user-plus"></i></a></span>
		</div>
		<div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
			<table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
			  <thead class="thead-dark|thead-light">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($list)<=0)
			  	<tr>
			  		<th>Chưa có thành viên nào</th>
			  	</tr>
			  	@endif	
			  	@foreach($list as $item)
			    <tr>
			      <th scope="row">{{$item->id}}</th>
			      <td>{{$item->name}}</td>
			      <td>{{$item->email}}</td>
			      <td class="action">
			      	<a href="{{route('detail',$item->id)}}"><i class="fas fa-eye text-info"></i></a>
			      	<a href="{{route('edit',$item->id)}}"><i class="fas fa-pen text-primary"></i></a>
			      	<a href="{{route('delete',$item->id)}}"><i class="fas fa-trash-alt text-danger"></i></a>
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
@endsection