@extends('layouts.admin')
@section('content')
<h1>Create Users</h1>
<div class="col-md-3">
	<img src="{{$user->photo?$user->photo->file:'https://placehold.it/400x400'}}" class="img-responsive img-round" alt="">
</div>
<div class="col-md-9">
	{!!Form::model($user,['method'=>'PUT','action'=>['AdminUsersController@update',$user->id],'files'=>true])!!}
	<div class="form-group">
		{!!Form::label('Name')!!}
		{!!Form::text('name',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Email')!!}
		{!!Form::email('email',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Role')!!}
		{!!Form::select('role_id',$roles,null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Status')!!}
		{!!Form::select('is_active',array(1=>'Active',0=>'Inactive'),null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Upload Image')!!}
		{!!Form::file('photo_id')!!}

	</div>
	<div class="form-group">
		{!!Form::label('Password')!!}
		{!!Form::password('password',['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::submit('Update',['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
	@include('includes.form_error')
</div>



@stop