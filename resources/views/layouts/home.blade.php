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
		<section class="bloco--monte">
			<div class="centralizar">
				<header class="titulo--padrao">
					<h1 class="titulo">Monte e gerencie sua própria república</h1>
				</header>
				<div class="bloco-terco">
					<figure class="icone--monte">
						<img src="images/icones/icone_hand.png" alt="">
						<div class="bubble"></div>
					</figure>
					<header class="titulo--bloco">
						<h3 class="sub-titulo">Encontre o melhor lugar com o filtro inteligente</h3>
					</header>
					<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis delectus fuga ducimus error eveniet quo dolor ullam possimus consequuntur. Dolor?</p>
				</div>
				<div class="bloco-terco">
					<figure class="icone--monte">
						<img src="images/icones/icone_card.png" alt="">
						<div class="bubble"></div>
					</figure>
					<header class="titulo--bloco">
						<h3 class="sub-titulo">Envie mensagens para os moradores</h3>
					</header>
					<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis delectus fuga ducimus error eveniet quo dolor ullam possimus consequuntur. Dolor?</p>
				</div>
				<div class="bloco-terco">
					<figure class="icone--monte">
						<img src="images/icones/icone_magnify.png" alt="">
						<div class="bubble"></div>
					</figure>
					<header class="titulo--bloco">
						<h3 class="sub-titulo">Ache moradores com o melhor perfil para a casa</h3>
					</header>
					<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis delectus fuga ducimus error eveniet quo dolor ullam possimus consequuntur. Dolor?</p>
				</div>
			</div>
		</section>
		<section class="bloco-lista">
			<div class="centralizar">
				<header class="titulo--padrao">
					<h1 class="titulo">Destaques</h1>
				</header>
				<section class="lista-linha">
        			<header class="linha--topo">
        				<p class="topo--info"><span>Repúblicas</span> (nome de destaque)</p>
        				<a href="" class="topo--link">Mostrar todos(valor total)</a>
        			</header>
        			<a href="" class="bloco-quarto item-imovel">
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
        		</section>
			</div>
		</section>
	</div>
</div>
@endsection
