@extends('../layouts.app')

@section('content')
<section class="bloco-lista">
	<div class="centralizar">
		<header class="titulo--padrao">
			<h1 class="titulo">Lista de imóveis</h1>
		</header>
		<section class="lista-linha">
			<header class="linha--topo">
				<p class="topo--info">Lista de imóveis</p>
			</header>
			@if(!empty($property))
			  <div href="" class="bloco-quarto item-imovel">
			    @foreach ($property->galeries as $key => $item)
			      @if($key === 0)
				  <figure  class="img-imovel">
			        <img src="/images/{{ $item->src }}" alt="" style="width: 100px; height: 100px">
				</figure>
			      @endif
			    @endforeach
				 <header class="titulo-imovel">
			    	<h2>{{ $property->name }}</h2>
				</header>
			   <p class="texto">{{ $property->description }}</p>
			   <footer class="info-item">
			    	<a href="{{ route('vacancies') }}" class="botao-padrao">Administrar vagas</a>
				</footer>
			  </div>
			@endif
		</section>
	</div>
</section>

@endsection
