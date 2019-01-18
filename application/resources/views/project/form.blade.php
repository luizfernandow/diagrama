<div class="card">
	<div class="card-header">
		{{ $cardHeader }}
	</div>
	<div class="card-body">
		{!! Form::text('name', __('projects.form.name'))->required() !!}
		{!! Form::select('journal_id', __('projects.form.journal'), $journals) !!}		
		{!! Form::select('article_type', __('projects.form.article_type'), $articleTypes) !!}
	</div>
	<div class="card-footer">
		{!! Form::submit(__('projects.form.save')) !!}
	</div>
</div>