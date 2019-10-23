@extends('../layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
	<div class="content">
		<section class="baner">
        	<div class="centralizar">
        		<div class="bloco-meio">
        			<figure class="logo--baner">
        				<img src="{{ asset('images/icones/logo_extensa.png') }}" alt="">
        			</figure>
        			<header class="titulo--baner">
        				<h1 class="titulo">Dê macth e more com quem combina com você.</h1>
        			</header>
        			<form action="" class="baner--filtro">
        				<input class="filtro-busca tel_mask_ddd" type="text" name="q" value="" placeholder="(55)0000-0000">
        				<button type="submit" class="filtro-botao">Buscar</button>
        			</form>
        			<a href="" class="baner--anuncio">Anunciar vaga</a>
        		</div>
        	</div>
        </section>
		<section class="bloco-filtro">
			<div class="centralizar">
				<div class="filtro-controles">
					<header class="controles-topo">
						<h1 class="topo-titulo">(nome da lilsta)</h1>
					</header>
					<div class="bloco-botoes">
						<p class="controles-botao_filtrar"><i data-fonte="">M</i> Filtrar</p>
						<p class="controles-botao_alerta">Criar alerta</p>
					</div>
				</div>
				<div class="filtro-breadcrumbs">
					<p class="breadcrumbs-lista">inicio > sao paulo > jardins</p>
					<form class="breadcrumbs-ordenar">
						<select class="select-padrao" name="">
							<option value="0">Mais relevante</option>
							<option value="1">Menos relevante</option>
							<option value="2">Mais caro</option>
							<option value="3">Mais barato</option>
						</select>
					</form>
				</div>
			</div>
		</section>
		<section class="bloco-lista">
			<div class="centralizar">
				<header class="titulo--padrao">
					<h1 class="titulo">Os melhores imóveis para você</h1>
				</header>
				<section class="lista-linha">
					<header class="linha--topo">
						<p class="topo--info"><span>Repúblicas</span> (nome de destaque)</p>
					</header>
					<a href="{{route('imoveis')}}" class="bloco-quarto item-imovel">
						<figure class="img-imovel">
							<img alt="" style="background-image: url('images/baners/imovel_1.jpg')">
						</figure>
						<header class="titulo-imovel">
							<h2>Lindo apartamento com 1 vaga</h2>
						</header>
						<p class="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
						<footer class="info-item">
							<p class="valor-imovel">R$ 300,00</p>
							<p class="metragem-imovel">72m²</p>
							<p class="vaga-imovel">1 vaga</p>
						</footer>
					</a>
					<a href="" class="bloco-quarto item-imovel">
						<figure class="img-imovel">
							<img alt="" style="background-image: url('images/baners/imovel_1.jpg')">
						</figure>
						<header class="titulo-imovel">
							<h2>(texto de chamada do imóvel aqui)</h2>
						</header>
						<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, labore.(texto descritivo aqui)</p>
						<footer class="info-item">
							<p class="valor-imovel">(valor do imóvel)</p>
							<p class="metragem-imovel">(metragem do imóvel)</p>
							<p class="vaga-imovel">(quantidade de vagas aqui)</p>
						</footer>
					</a>
					<a href="" class="bloco-quarto item-imovel">
						<figure class="img-imovel">
							<img alt="" style="background-image: url('images/baners/imovel_1.jpg')">
						</figure>
						<header class="titulo-imovel">
							<h2>(texto de chamada do imóvel aqui)</h2>
						</header>
						<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, labore.(texto descritivo aqui)</p>
						<footer class="info-item">
							<p class="valor-imovel">(valor do imóvel)</p>
							<p class="metragem-imovel">(metragem do imóvel)</p>
							<p class="vaga-imovel">(quantidade de vagas aqui)</p>
						</footer>
					</a>
					<a href="" class="bloco-quarto item-imovel">
						<figure class="img-imovel">
							<img alt="" style="background-image: url('images/baners/imovel_1.jpg')">
						</figure>
						<header class="titulo-imovel">
							<h2>(texto de chamada do imóvel aqui)</h2>
						</header>
						<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, labore.(texto descritivo aqui)</p>
						<footer class="info-item">
							<p class="valor-imovel">(valor do imóvel)</p>
							<p class="metragem-imovel">(metragem do imóvel)</p>
							<p class="vaga-imovel">(quantidade de vagas aqui)</p>
						</footer>
					</a>
					<a href="" class="bloco-quarto item-imovel">
						<figure class="img-imovel">
							<img alt="" style="background-image: url('images/baners/imovel_1.jpg')">
						</figure>
						<header class="titulo-imovel">
							<h2>(texto de chamada do imóvel aqui)</h2>
						</header>
						<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, labore.(texto descritivo aqui)</p>
						<footer class="info-item">
							<p class="valor-imovel">(valor do imóvel)</p>
							<p class="metragem-imovel">(metragem do imóvel)</p>
							<p class="vaga-imovel">(quantidade de vagas aqui)</p>
						</footer>
					</a>
					<a href="" class="bloco-quarto item-imovel">
						<figure class="img-imovel">
							<img alt="" style="background-image: url('images/baners/imovel_1.jpg')">
						</figure>
						<header class="titulo-imovel">
							<h2>(texto de chamada do imóvel aqui)</h2>
						</header>
						<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, labore.(texto descritivo aqui)</p>
						<footer class="info-item">
							<p class="valor-imovel">(valor do imóvel)</p>
							<p class="metragem-imovel">(metragem do imóvel)</p>
							<p class="vaga-imovel">(quantidade de vagas aqui)</p>
						</footer>
					</a>
					<a href="" class="bloco-quarto item-imovel">
						<figure class="img-imovel">
							<img alt="" style="background-image: url('images/baners/imovel_1.jpg')">
						</figure>
						<header class="titulo-imovel">
							<h2>(texto de chamada do imóvel aqui)</h2>
						</header>
						<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, labore.(texto descritivo aqui)</p>
						<footer class="info-item">
							<p class="valor-imovel">(valor do imóvel)</p>
							<p class="metragem-imovel">(metragem do imóvel)</p>
							<p class="vaga-imovel">(quantidade de vagas aqui)</p>
						</footer>
					</a>
				</section>
			</div>
		</section>


	</div>
</div>
@endsection
