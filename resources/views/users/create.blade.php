@extends('layouts.master')
@section('content')
<div class="new p-5">
	<h4>User mới</h4>
	<form method="post" action="{{route('store')}}">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Name</label>
				<input type="text" class="form-control" placeholder="Name" name="name" required>
			</div>
			<div class="form-group col-md-6">
				<label>Email</label>
				<input type="email" class="form-control" placeholder="Email" name="email" required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Birthday</label>
				<input type="text" class="form-control" placeholder="dd-MM-YY" name="birthday" required>
			</div>
			<div class="form-group col-md-6">
				<label>Sex</label>
				<select class="form-control" name="sex">
					<option value="1" selected>Nam</option>
					<option value="2">Nữ</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" class="form-control" name="address" required>
		</div>
		<button type="submit" class="btn btn-primary">Thêm mới</button>
	</form>
</div>
@endsection