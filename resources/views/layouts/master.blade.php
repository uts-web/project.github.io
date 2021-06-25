<!DOCTYPE HTML>
<!--
	Broadcast by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>ASP SHOP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="/">ASP <span>SHOP</span></a></h1>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
          @can('user-display')
          <a class="nav-link" href="{{ route('home') }}">Home</a>
          @endcan
          </li>
          
          <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
          @can('manage-kategoris')
          <a class="nav-link" href="{{ route('manage') }}">Manage</a>\
          @endcan
          </li>
          
          <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
                </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
              </form>
              </div>
          </li>
				</ul>
			</nav>

     @yield('content')


     

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>
			<script src="{{ asset('js/bootstrap.min.js	') }}"></script>

	</body>
</html>