@extends('../layouts.app')

@section('content')
<div class="container">
	<div class="flex-center position-ref full-height">
		<div class="content centralizar bloco-adm">
			<section class="adm-unico-bloco">
				<header class="adm-breadcrumb">MATCHES</header>
			</section>
			<section class="adm-unico-bloco">
				<section class="adm-matches">
					<div class="bloco-menu">
						<a href="{{ route('properties') }}" class="link">Meus Imóveis</a>
					</div>
					<header class="titulo-matches">
						<h1 class="titulo">Moradores compatíveis</h1>
					</header>

					@foreach ($users as $user)
					<section class="bloco-quarto">
						<header class="titulo-matches">
						    <h1 class="titulo">{{ $user->name }}</h1>
						</header>


						    @if(!in_array($user->id, $alerts))

						      {{ Form::open(array('route' => 'alert.store', 'method' => 'post')) }}
						        {{ Form::hidden('property_id', $property) }}
						        {{ Form::hidden('user_id', $user->id) }}
								<div class="links">
						        {{ Form::submit('Match') }}
								</div>
						      {{ Form::close() }}

						    @endif
					</section>
					@endforeach
				</section>
			</section>

		</div>
	</div>
</div>



@endsection
