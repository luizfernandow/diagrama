@extends('layouts.default')

@section('breadcrumbs', Breadcrumbs::render('journals'))

@section('content')
<div class="card">
    <div class="card-header">Periódicos</div>

    <div class="card-body">
    	{!! Form::open()->multipart()->route('journals.update') !!}
    		{!! Form::file('csv_journals') !!}
    		{!! Form::submit("Upload csv") !!}
    	{!! Form::close() !!}

        {!! Form::open()->get()->route('journals.index')->attrs(['class' => 'mt-5'])->fill(['title' => $title]) !!}
            {!! Form::text('title')->placeholder('Title') !!}
            {!! Form::submit("Filter") !!}
        {!! Form::close() !!}


    	<div class="table-responsive mt-5">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>@lang('short_title')</th>
                    <th>@lang('title')</th>
                </tr>
                </thead>

                <tbody>
                @forelse($journals as $journal)
                    <tr>
                        <td>{{ $journal->short_title }}</td>
                        <td>{{ $journal->title }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">@lang('empty')</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {!! $journals->appends(['title' => $title])->links() !!}
        </div>           
    </div>
</div>
@endsection
