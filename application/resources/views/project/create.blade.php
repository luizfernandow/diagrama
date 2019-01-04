@extends('layouts.default')

@section('breadcrumbs', Breadcrumbs::render('projects.create'))

@section('content')
{!! Form::open()->route('projects.store') !!}
<div class="card">
	<div class="card-header">
		@lang('projects.create')
	</div>
	<div class="card-body">
		{!! Form::text('name', __('projects.form.name'))->required() !!}
		{!! Form::select('journal_id', __('projects.form.journal'), $journals) !!}
	</div>
	<div class="card-footer">
		{!! Form::submit(__('projects.form.save')) !!}
	</div>
</div>
{!! Form::close() !!}
@endsection
