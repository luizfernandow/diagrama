@extends('layouts.default')

@section('breadcrumbs', Breadcrumbs::render('projects.index'))

@section('content')

{!! Form::anchor('<i class="fas fa-plus"></i> ' . __('projects.create'))->route('projects.create')->attrs(['class' => 'mb-2']) !!}

<div class="card">
    <div class="card-header">Projetos</div>

    <div class="card-body">
       <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>@lang('projects.table.name')</th>
                    <th>@lang('projects.table.journal')</th>
                    <th>@lang('projects.table.actions')</th>
                </tr>
                </thead>

                <tbody>
                @forelse($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->journal->title }}</td>
                        <td>
                        	{!! Form::anchor('<i class="fas fa-file-code"></i> ' . __('projects.table.xml'))->route('projects.xml', ['project' => $project->id])->info() !!}
                            {!! Form::anchor('<i class="fas fa-edit"></i> ' . __('projects.table.edit'))->route('projects.edit', ['project' => $project->id])->info() !!}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">@lang('projects.table.empty')</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {!! $projects->links() !!}
        </div> 
    </div>
</div>
@endsection
