@extends('layouts.default')

@section('breadcrumbs', Breadcrumbs::render('home'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            @lang('app.home_default_text')
        </div>
    </div>
</div>
@endsection
