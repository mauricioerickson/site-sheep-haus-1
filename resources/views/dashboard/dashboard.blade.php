@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <a href="{{ route('property') }}" class="btn btn-primary">Cadastro de Imoveis</a>
                </div>
                <div class="edit-button">
                        <a href="{{ route('profile') }}" class="btn btn-primary">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
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
