@extends('layouts.default')

@section('breadcrumbs', Breadcrumbs::render('projects.create'))

@section('content')
{!! Form::open()->route('projects.store') !!}
	@include('project.form', ['cardHeader' => __('projects.create')])
{!! Form::close() !!}
@endsection
