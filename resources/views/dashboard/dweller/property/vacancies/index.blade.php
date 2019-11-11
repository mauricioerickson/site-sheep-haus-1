@extends('../layouts.app')

@section('content')
<div class="container">
	<div class="flex-center position-ref full-height">
		<div class="content centralizar bloco-adm">
			<section class="adm-unico-bloco">
				<header class="adm-breadcrumb">Dashboard > Vagas</header>
			</section>
			<section class="adm-unico-bloco">
				<header class="nova-vaga">
					<a href="{{ route('vacancies.create', [$property->property_id]) }}" class="botao-padrao">Criar nova vaga</a>
				</header>
			</section>
			<section class="adm-unico-bloco">
				<section class="adm-vagas">
					<header class="titulo-contas">
						<h1 class="titulo">VAGAS CRIADAS</h1>
					</header>
						@foreach ($vagas as $vaga)
							<section class="bloco-quarto">
								<header class="titulo-contas">
								    <h1 class="titulo">{{ $vaga->title }}</h1>
								</header>
						      <p class="texto"><span class="texto-bold">Descição:</span> {{ $vaga->description }}</p>

						      <p class="texto"><span class="texto-bold">Entrada:</span> {{ $vaga->entrance }}</p>

						      <p class="texto"><span class="texto-bold">Saida:</span> {{ $vaga->exit }}</p>

						      <p class="texto"><span class="texto-bold">Valor:</span> {{ $vaga->value }}</p>

						      <div class="links">

						        @if(!in_array($vaga->id, $vcontract))
						          <a href="{{ route('match_vacancy', [$vaga->id]) }}" class="botao-padrao ver">Ver Match</a>
						          <a href="{{ route('vacancies.edit', [$vaga->id]) }}" class="botao-padrao editar">Editar</a>

						          {{ Form::open(array('route' => 'vacancy', 'method' => 'delete')) }}
						            {{ Form::hidden('id', $vaga->id) }}
						            {{ Form::submit('Remover Vaga', ['class' => 'botao-padrao remover']) }}
						          {{ Form::close() }}

						        @else
						          <a href="{{ route('match_vacancy', [$vaga->id]) }}" class="botao-padrao">Ver Morador</a>
						        @endif

						      </div>
							</section>
					    @endforeach
				</section>
			</section>
		</div>
	</div>
</div>
@endsection
