@extends('layouts.app')

@section('title')
	Nieuw boek toevoegen
@endsection

@section('tools')
<li role="navigation">
	<a onClick="window.history.back()">
		<i class="fa fa-arrow-left"></i>&nbspTerug
	</a>
</li>
@endsection

@section('content')

<div class="form-group">
	<div class="col-sm-2">
		{!! Form::label('isbn', 'ISBN', ['class' => 'control-label']) !!}
		{!! Form::text('isbn', null, ['class' => 'form-control', 'placeholder' => 'ISBN Nummer']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('isbn', 'ISBN', ['class' => 'control-label']) !!}
		{!! Form::text('isbn', null, ['class' => 'form-control', 'placeholder' => 'ISBN Nummer']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('isbn', 'ISBN', ['class' => 'control-label']) !!}
		{!! Form::text('isbn', null, ['class' => 'form-control', 'placeholder' => 'ISBN Nummer']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('isbn', 'ISBN', ['class' => 'control-label']) !!}
		{!! Form::text('isbn', null, ['class' => 'form-control', 'placeholder' => 'ISBN Nummer']) !!}
	</div>
	

</div>

<div class="form-group">
	<div class="col-sm-12">
		<button type="submit" class="btn btn-primary">
			Opslaan
		</button>
	</div>
</div>
{!! Form::close() !!}
@endsection
