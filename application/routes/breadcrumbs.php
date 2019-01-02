<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push(__('breadcrumbs.home'), route('home', ''));
});

// Home
Breadcrumbs::for('journals', function ($trail) {
	$trail->parent('home');
    $trail->push(__('breadcrumbs.journals'), route('journals.index'));
});

// Home
Breadcrumbs::for('projects', function ($trail) {
	$trail->parent('home');
    $trail->push(__('breadcrumbs.projects'), route('projects.index'));
});