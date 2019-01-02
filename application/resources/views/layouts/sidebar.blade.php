<div class="sidebar">
    <nav class="sidebar-nav ps">
    	<ul class="nav">
		    <li class="nav-item">
                <a class="nav-link" href="{{ route('projects.index') }}">
                	<i class="nav-icon fas fa-project-diagram"></i>
                	{{ __('Projetos') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('journals.index') }}">
                	<i class="nav-icon fas fa-journal-whills"></i>
                	{{ __('Periódicos') }}
                </a>
            </li>
		</ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>