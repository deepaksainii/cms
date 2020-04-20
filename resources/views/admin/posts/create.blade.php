@extends('layouts.admin')
@section('title') Create Post
@stop
@section('content')
<h1>Create Post</h1>

<div class="row">
{!!Form::open(['method'=>'Post','action'=>'AdminPostsController@store','files'=>true])!!}
	<div class="col-md-12">
		<div class="form-group">
			{!!Form::label('title','Title')!!}
			{!!Form::text('title',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('content','Content')!!}
			{!!Form::textarea('content',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('category_id','Category')!!}
			{!!Form::select('category_id',[''=>'Select Category',1=>'Laravel'],null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('photo_id','Upload Featured Image')!!}
			{!!Form::file('photo_id',['class'=>'form-control'])!!}			
		</div>
		<div class="form-group">
			{!!Form::submit('Save Post',['class'=>'btn btn-primary'])!!}
		</div>
	</div>
{!!Form::close()!!}
</div>

<div class="row">
	@include('includes.form_error')
</div>
@stop

