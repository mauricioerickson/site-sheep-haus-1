<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/icons/font-awesome.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="menu">
            <div class="centralizar">
				<header class="menu--topo">
					<a class="navbar-brand" href="{{ url('/') }}">
	                    {{ config('app.name', 'Laravel') }}
	                </a>


					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
	                    <span class="navbar-toggler-icon"></span>
	                </button>

	                <section class="menu--itens" id="navbarSupportedContent">
	                    <!-- Left Side Of Navbar -->
	                    <ul class="menu--itens_lista">
							<li class="lista-item">
								<p>Tenho imóvel</p>
								<ul class="sub_menu--itens_lista">
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Divulgar</a>
									</li>
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Match moradores</a>
									</li>
								</ul>
							</li>
							<li class="lista-item">
								<p>Sou aluno</p>
								<ul class="sub_menu--itens_lista">
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Match imóveis</a>
									</li>
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Amigos</a>
									</li>
								</ul>
							</li>
							<li class="lista-item">
								<p>Prestador Serviços</p>
								<ul class="sub_menu--itens_lista">
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Anunciar</a>
									</li>
								</ul>
							</li>
							<li class="lista-item">
								<a href="{{route('home')}}">Procurar vaga</a>
							</li>
							<li class="lista-item">
								<a href="{{route('home')}}">Anunciar Serviços</a>
							</li>
							<li class="lista-item">
								<a href="{{route('home')}}">Anunciar vaga</a>
							</li>
							@guest
							   <li class="lista-item">
								   <a class="login" href="{{ route('login') }}">{{ __('Login') }}</a>
							   </li>
							   @if (Route::has('register'))
								   <!-- <li class="lista-item">
									   <a class="registro" href="{{ route('register') }}">{{ __('Register') }}</a>
								   </li> -->
							   @endif
						   @else
							   <li class="lista-item dropdown">
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
						   @endguest
						   <li class="lista-item menu--linguagem">
   							<div class="dropdown">
   								<div class="botao-dropdown">BR</div>
   								<input type="checkbox" id="dropdown">
   								<ul class="dropdown-menu">
   									<li><a href="{{Request::url()}}?locale=en">BR</a></li>
   									<li><a href="{{Request::url()}}?locale=pt-BR">EN</a></li>
   									<li><a href="{{Request::url()}}?locale=es">ES</a></li>
   								</ul>
   							</div>
   						</li>
	                    </ul>
	                </section>
				</header>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
		<footer class="rodape">
			<div class="centralizar">
				<nav class="menu--rodape">
					<section class="menu--linguagem" id="navbarSupportedContent">
						<a class="logo" href="{{ url('/') }}">
						<!-- {{ config('app.name', 'Laravel') }} -->
							<figure>
								<img src="images/icones/logo_completa.png" alt="">
							</figure>
						</a>
						<div class="dropdown">
							<div class="botao-dropdown">BR</div>
							<input type="checkbox" id="dropdown">
							<ul class="dropdown-menu">
								<li><a href="">EN</a></li>
								<li><a href="">BR</a></li>
								<li><a href="">ES</a></li>
							</ul>
						</div>
					</section>
					<section class="menu--itens" id="navbarSupportedContent">
						<ul class="menu--itens_lista">
							<li class="lista-item">
								<p>Tenho imóvel</p>
								<ul class="sub_menu--itens_lista">
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Divulgar</a>
									</li>
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Match moradores</a>
									</li>
								</ul>
							</li>
							<li class="lista-item">
								<p>Sou aluno</p>
								<ul class="sub_menu--itens_lista">
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Match imóveis</a>
									</li>
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Amigos</a>
									</li>
								</ul>
							</li>
							<li class="lista-item">
								<p>Prestador Serviços</p>
								<ul class="sub_menu--itens_lista">
									<li class="sub-lista-item">
										<a href="{{route('home')}}">Anunciar</a>
									</li>
								</ul>
							</li>
							<li class="lista-item">
								<a href="{{route('home')}}">Procurar vaga</a>
							</li>
							<li class="lista-item">
								<a href="{{route('home')}}">Anunciar Serviços</a>
							</li>
							<li class="lista-item">
								<a href="{{route('home')}}">Anunciar vaga</a>
							</li>
						</ul>
					</section>
					<section class="menu--base">
						<nav class="base-menu">
							<ul class="base-lista">
								<li class="base-itens"><a href="">Sobre</a></li>
								<li class="base-itens"><a href="">Contato</a></li>
								<li class="base-itens"><a >Termo</a></li>
							</ul>
							<div class="copyright">
								<p class="texto">
									© {{date('Y')}} @lang('general.terms')
								</p>
							</div>
							<div class="compartilhar">
								<p class="texto">Follow</p>
								<a href=""><i class="icone facebook" data-fonte="&#xf09a;"></i></a>
								<a href=""><i class="icone twitter" data-fonte="&#xf099;"></i></a>
							</div>
						</nav>
					</section>
				</nav>
			</div>
		</footer>
    </div>
</body>
</html>
