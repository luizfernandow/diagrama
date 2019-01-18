@extends('layouts.default')

@section('breadcrumbs', Breadcrumbs::render('projects.edit', $project))

@section('content')
{!! Form::open()->route('projects.update', [$project->id])->put()->fill($project) !!}
	@include('project.form', ['cardHeader' => __('projects.edit')])
{!! Form::close() !!}
@endsection
