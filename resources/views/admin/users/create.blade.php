@extends('layouts.admin')
@section('content')
<h1>Create Users</h1>

{!!Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true])!!}
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
	{!!Form::select('role_id',[''=>'choose options']+$roles,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Status')!!}
	{!!Form::select('status',array(1=>'Active',0=>'Inactive'),null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Upload Image')!!}
	{!!Form::file('file')!!}
	
</div>
<div class="form-group">
	{!!Form::label('Password')!!}
	{!!Form::password('password',['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::submit('Create Users',['class'=>'btn btn-primary'])!!}
</div>
{!!Form::close()!!}

@include('includes.form_error')

@stop