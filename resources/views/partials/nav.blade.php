<nav>
		<ul>
			<li class="{{ setActive('home') }}"><a href="{{route('home')}}">@lang('Home')</a></li>
			<li class="{{ setActive('about') }}"><a href="{{route('about')}}">@lang('About')</a></li>
			<li class="{{ setActive('projects.index') }}"><a href="{{route('projects.index')}}">@lang('Projects')</a></li>
			<li class="{{ setActive('message.store') }}"><a href="{{route('message.store')}}">@lang('Contact')</a></li>
		</ul>
	</nav>
