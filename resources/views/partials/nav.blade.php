<nav>
		<ul>
			<li class="{{ setActive('home') }}"><a href="{{route('home')}}">@lang('Home')</a></li>
			<li class="{{ setActive('about') }}"><a href="{{route('about')}}">@lang('About')</a></li>
			<li class="{{ setActive('projects.index') }}"><a href="{{route('projects.index')}}">@lang('Projects')</a></li>
			<li class="{{ setActive('message.store') }}"><a href="{{route('message.store')}}">@lang('Contact')</a></li>
			@auth
				<li><a href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">@lang('Logout')</a></li>
			@else
				<li class="{{ setActive('login') }}"><a href="{{ route('login') }}">@lang('Login')</a></li>
			@endauth
			
		</ul>
	</nav>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
	</form>
