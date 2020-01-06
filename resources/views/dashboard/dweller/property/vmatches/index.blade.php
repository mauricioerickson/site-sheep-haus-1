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
						<h1 class="titulo">Moradores interessados</h1>
					</header>

					@foreach ($dados as $dado)
					<section class="bloco-quarto">
							<header class="titulo-matches">
							    <h1 class="titulo">{{ $dado->name }}</h1>
							</header>

						  <p class="texto">Email: <span class="texto_cinza texto-bold">{{ $dado->email }}</span></p>

						  <p class="texto">Telefone: <span class="texto_cinza texto-bold">{{ $dado->cell_phone }}</span></p>
						  @if(empty($contract))
						   {{ Form::open(array('route' => 'v_contract', 'method' => 'post')) }}

						   {{ Form::hidden('user_id', $dado->id) }}
						   {{ Form::hidden('vacancy_id', $vacancy->id) }}
						   {{ Form::hidden('property_id', $vacancy->property_id) }}
					   	<div class="links">
						   {{ Form::submit('Assinar') }}
					   </div>
						   {{ Form::close() }}
						 @else
						   {{ Form::open(array('route' => 'v_contract', 'method' => 'delete')) }}

						   {{ Form::hidden('user_id', $dado->id) }}
						   {{ Form::hidden('vacancy_id', $vacancy->id) }}
					   	<div class="links">
						   {{ Form::submit('Cancelar') }}
					   </div>
						   {{ Form::close() }}
						 @endif
					
					</section>
				@endforeach
			</section>

		</div>
	</div>
</div>

@endsection
