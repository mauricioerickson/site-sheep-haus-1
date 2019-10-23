@extends('../layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
	<div class="content centralizar bloco-adm">
		<section class="adm-primeiro-bloco detalhe">
			<section class="bloco-galeria-horizontal">
				<div class="foto-grande">
					<figure>
						<a data-fancybox="galeria_vertical" class="item-foto" href="https://via.placeholder.com/150">
							<img style="background-image:url('https://via.placeholder.com/150')" alt="">
						</a>
					</figure>
				</div>
				<div class="tumbnails">
					<ul>
						<li data-quantidade ="+ 5 FOTOS">
							<a data-fancybox="galeria_vertical" class="item-foto" href="https://via.placeholder.com/150">
								<img style="background-image:url('https://via.placeholder.com/150')"alt="">
							</a>
						</li>
						<li data-quantidade ="+ 5 FOTOS">
							<a data-fancybox="galeria_vertical" class="item-foto" href="https://via.placeholder.com/150">
								<img style="background-image:url('https://via.placeholder.com/150')"alt="">
							</a>
						</li>
						<li data-quantidade ="+ 5 FOTOS">
							<a data-fancybox="galeria_vertical" class="item-foto" href="https://via.placeholder.com/150">
								<img style="background-image:url('https://via.placeholder.com/150')"alt="">
							</a>
						</li>
						<li data-quantidade ="+ 5 FOTOS">
							<a data-fancybox="galeria_vertical" class="item-foto" href="https://via.placeholder.com/150">
								<img style="background-image:url('https://via.placeholder.com/150')"alt="">
							</a>
						</li>
						<li data-quantidade ="+ 5 FOTOS">
							<a data-fancybox="galeria_vertical" class="item-foto" href="https://via.placeholder.com/150">
								<img style="background-image:url('https://via.placeholder.com/150')"alt="">
							</a>
						</li>
						<li data-quantidade ="+ 5 FOTOS">
							<a data-fancybox="galeria_vertical" class="item-foto" href="https://via.placeholder.com/150">
								<img style="background-image:url('https://via.placeholder.com/150')"alt="">
							</a>
						</li>
					</ul>
				</div>
			</section>

		</section>
		<section class="adm-segundo-bloco detalhe">
			<section class="reserva vaga">
				<header>
					<h1 class="titulo">R$ 120,00 <span>Por noite</span></h1>
				</header>
				<form action="">
					<div class="bloco chegada">
						<label for="">Chegada</label>
						<input type="date" name="" value="">
					</div>
					<div class="bloco chegada">
						<label for="">Chegada</label>
						<input type="date" name="" value="">
					</div>
					<div class="bloco chegada">
						<label for="">Chegada</label>
						<input type="date" name="" value="">
					</div>
					<div class="bloco chegada">
						<label for="">Chegada</label>
						<input type="date" name="" value="">
					</div>
					<button type="button" class="bt_reserva" name="button">RESERVAR</button>
				</form>
				<div class="info">
					<p class="texto">Esse imóvel só pode ser reservado após o pagamento.</p>
				</div>
			</section>

		</section>
		<section class="adm-primeiro-bloco detalhe">
			<section class="apresentacao vaga">
				<p class="titulo">Apartamento recem formado</p>
				<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum accusamus inventore totam voluptates eos, repellendus eligendi nisi facere fuga cupiditate.</p>
				<p class="texto despesas">
					R$ 120,00 por noite
				</p>
				<p class="texto extras">
					<span>DESPESASA EXTRAS</span><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, voluptate!</p>
			</section>

			<section class="mensagem-nova">
				<a href="">
					<i data-fonte="">M</i>
					<p class="texto">Mandar mensagem</p>
				</a>
				<a href="">
					<i data-fonte="">M</i>
					<p class="texto">Localização</p>
				</a>
			</section>

			<section class="descricao vaga">
				<section class="sobre-republica">
					<header class="titulo-descricao">
						<h1 class="titulo">SOBRE A REPÚBLICA</h1>
					</header>
					<ul class="lista-descricao">
						<li class="item-descricao"><i data-fonte="" class="link">M</i>52²m</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>PORTARIA 24 HORAS</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>ÁREA EXTERNA</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>3 QUARTOS</li>
					</ul>
				</section>
				<section class="sobre-republica">
					<header class="titulo-descricao">
						<h1 class="titulo">SOBRE OS MORADORES</h1>
					</header>
					<ul class="lista-descricao">
						<li class="item-descricao"><i data-fonte="" class="link">M</i>AR CONDICIONADO</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>CHURRASQUEIRA</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>2 BANHEIROS</li>
					</ul>
				</section>
				<section class="sobre-republica">
					<header class="titulo-descricao">
						<h1 class="titulo">SEU QUARTO</h1>
					</header>
					<ul class="lista-descricao">
						<li class="item-descricao"><i data-fonte="" class="link">M</i>2 MORADORES</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>LAVA-LOUÇAS</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>SAUNA</li>
					</ul>
				</section>
				<section class="sobre-moradores">
					<header class="titulo-descricao">
						<h1 class="titulo">COMODIDADES</h1>
					</header>
					<ul class="lista-descricao">
						<li class="item-descricao"><i data-fonte="" class="link">M</i>FUMANTE</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>SEM ANIMAIS</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>SEM CRIANÇAS</li>
					</ul>
					<ul class="lista-descricao">
						<li class="item-descricao"><i data-fonte="" class="link">M</i>FUMANTE</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>SEM ANIMAIS</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>SEM CRIANÇAS</li>
					</ul>
					<ul class="lista-descricao">
						<li class="item-descricao"><i data-fonte="" class="link">M</i>FUMANTE</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>SEM ANIMAIS</li>
						<li class="item-descricao"><i data-fonte="" class="link">M</i>SEM CRIANÇAS</li>
					</ul>
				</section>
			</section>

		</section>
		<section class="adm-segundo-bloco detalhe">
			<section class="buscar vaga">
				<header>
					<h1 class="titulo">BUSCAR OUTRO LOCAL</h1>
				</header>
				<form action="">
					<div class="bloco local">
						<input type="text" name="" value="" placeholder="Local">
					</div>
					<div class="bloco quartos">
						<input type="text" name="" class="tamanho-mask" value="" placeholder="Quantos quartos">
					</div>
					<div class="bloco banheiro">
						<input type="text" name="" class="tamanho-mask" value="" placeholder="Banheiros privativos">
					</div>
					<div class="bloco chegada">
						<label for="">Metragem mínima</label>
						<input type="text" name="" value="" class="tamanho-mask">
					</div>
					<div class="bloco chegada">
						<label for="">Metragem máxima</label>
						<input type="text" name="" value="" class="tamanho-mask">
					</div>
					<div class="bloco preco">
						<label for="">Alcance de preço</label>
						<p>R$<span class="valor_slider">0</span> até R$ 2.000</p>
						<input type="range" min="1" max="2000" name="valor" value="0" class="slider">
					</div>
					<button type="button" class="bt_reserva" name="button">PESQUISAR</button>
				</form>
			</section>

		</section>
		<section class="adm-unico-bloco">
			<section class="bloco-lista">
				<div class="centralizar">
					<section class="lista-linha">
						<header class="linha--topo">
							<p class="topo--info"><span>Repúblicas parecidas com esta</span> (localização aqui)</p>
							<a href="{{ URL::route('imoveis')}}" class="topo--link">Mostrar todos(valor total)</a>
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
					</section>
				</div>
			</section>

		</section>
	</div>
</div>
@endsection
