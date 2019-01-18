<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push(__('breadcrumbs.home'), route('home', ''));
});

// Journals
Breadcrumbs::for('journals', function ($trail) {
	$trail->parent('home');
    $trail->push(__('breadcrumbs.journals'), route('journals.index'));
});

// Projects
Breadcrumbs::for('projects.index', function ($trail) {
	$trail->parent('home');
    $trail->push(__('breadcrumbs.projects.index'), route('projects.index'));
});

Breadcrumbs::for('projects.create', function ($trail) {
	$trail->parent('projects.index');
    $trail->push(__('breadcrumbs.projects.create'), route('projects.create'));
});

Breadcrumbs::for('projects.edit', function ($trail, $project) {
	$trail->parent('projects.index');
    $trail->push(__('breadcrumbs.projects.edit'), route('projects.edit', $project->id));
});