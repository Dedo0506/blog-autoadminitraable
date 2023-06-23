@extends('adminlte::page')

@section('title', 'Prueba Admin')

@section('content_header')
	<h1>Crear etiqueta</h1>
@stop

@section('content')
<div class="card">

	<div class="card-body">

		{!! Form::open(['route'=>'admin.tags.store']) !!}

			<div class="form-group">
				{!! Form::label('name', 'Nombre') !!}
				{!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}

				@error('name')
					<span class="text-danger">{{$message}}</span>
				@enderror

			</div>

			<div class="form-group">
				{!! Form::label('slug', 'Slug') !!}
				{!! Form::text('slug', null, ['class'=> 'form-control', 'placeholder' => 'Slug de la etiqueta', 'readonly']) !!}
				
				@error('slug')
					<span class="text-danger">{{$message}}</span>
				@enderror

			</div>

			{!! Form::submit('Crear etiqueta', ['class'=> 'btn btn-primary']) !!}

		{!! Form::close() !!}

	</div>

</div>
@stop

