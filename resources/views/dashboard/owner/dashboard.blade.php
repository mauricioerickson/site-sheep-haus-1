@extends('../layouts.app')

@section('content')
<div class="container">
	<div class="flex-center position-ref full-height">
		<div class="content centralizar bloco-adm">
			<section class="adm-unico-bloco">
				<header class="adm-breadcrumb">Dashboard</header>
				<div class="card-body">
					<a href="{{ route('property.create') }}" class="btn btn-primary">Cadastro de Imoveis</a>
					<a href="{{ route('properties') }}" class="btn btn-primary">Meus Imóveis</a>
				</div>
			</section>
			<section class="adm-primeiro-bloco">
				<section class="adm-vagas">
	<header class="titulo-contas">
		<h1 class="titulo">VAGAS</h1>
	</header>
	<section class="adm-imovel">
		<div class="imovel">
			<header>
				<figure style="background-image: url('images/baners/imovel_1.jpg')"></figure>
				<h1 class="titulo">TÍTULO DO IMÓVEL</h1>
			</header>
			<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor voluptates iusto, aut non placeat officiis laborum, velit omnis nemo veritatis.</p>
			<div class="info">
				<p class="valor">R$300</p>
				<p class="metragem"> 72 m²</p>
				<p class="vagas">3 vagas</p>
			</div>
			<a href="" class="link">VISUALIZAR</a>
			<a href="" class="link destacar"><i data-fonte="" class="icone">M</i>DESTACAR ANÚNCIO</a>
			<div class="links">
				<a href="" class="link editar">EDITAR</a>
				<a href="" class="link apagar">APAGAR</a>
			</div>
		</div>
		<div class="imovel">
			<header>
				<figure style="background-image: url('images/baners/imovel_1.jpg')"></figure>
				<h1 class="titulo">TÍTULO DO IMÓVEL</h1>
			</header>
			<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor voluptates iusto, aut non placeat officiis laborum, velit omnis nemo veritatis.</p>
			<div class="info">
				<p class="valor">R$300</p>
				<p class="metragem"> 72 m²</p>
				<p class="vagas">3 vagas</p>
			</div>
			<a href="" class="link">VISUALIZAR</a>
			<a href="" class="link destacar"><i data-fonte="" class="icone">M</i>DESTACAR ANÚNCIO</a>
			<div class="links">
				<a href="" class="link editar">EDITAR</a>
				<a href="" class="link apagar">APAGAR</a>
			</div>
		</div>
	</section>
</section>


				<!-- aqui vem o adm de morador padrao -->
				<!-- aqui vem o adm de serviço do morador padrao -->
				<section class="adm-servicos">
					<header class="titulo-contas">
						<h1 class="titulo">VAGAS</h1>
					</header>
					<section class="adm-tipo_servico">
						<div class="servico">
							<header>
								<figure style="background-image: url('images/baners/imovel_1.jpg')"></figure>
							</header>
							<div class="links">
								<a href="" class="link editar">EDITAR</a>
								<a href="" class="link apagar">APAGAR</a>
							</div>
						</div>
						<div class="servico">
							<header>
								<figure style="background-image: url('images/baners/imovel_1.jpg')"></figure>
							</header>
							<div class="links">
								<a href="" class="link editar">EDITAR</a>
								<a href="" class="link apagar">APAGAR</a>
							</div>
						</div>
					</section>
				</section>

				<!-- aqui vem o adm de serviço do morador padrao -->
			</section>
			<section class="adm-segundo-bloco">
				<!-- aqui vem as mini mensagems -->
				<section class="mensagens">
					<header class="titulo-mensagens">
						<i data-fonte="" class="icone-mensagens">M</i>
						<h1 class="titulo">MENSAGENS</h1>
						<a href=""><i data-fonte="" class="icone-mensagens">3</i></a>
					</header>
					<ul class="lista-mensagens">
						<li class="mensagens-item">
							<a href="">
								<header class="item-titulo">
									<h3 class="titulo-nome">Adriano</h3>
								</header>
								<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam?</p>
								<footer class="item-rodape">
									<p class="item-data">10/10/10</p>
									<p class="item-hora">10:10</p>
								</footer>
							</a>
						</li>
						<li class="mensagens-item">
							<a href="">
								<header class="item-titulo">
									<h3 class="titulo-nome">Adriano</h3>
								</header>
								<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam?</p>
								<footer class="item-rodape">
									<p class="item-data">10/10/10</p>
									<p class="item-hora">10:10</p>
								</footer>
							</a>
						</li>
						<li class="mensagens-item">
							<a href="">
								<header class="item-titulo">
									<h3 class="titulo-nome">Adriano</h3>
								</header>
								<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam?</p>
								<footer class="item-rodape">
									<p class="item-data">10/10/10</p>
									<p class="item-hora">10:10</p>
								</footer>
							</a>
						</li>
					</ul>
					<div class="links">
						<a href=""><i data-fonte="" class="icone-links">M</i><p>MENSAGEM NOVA</p></a>
						<a href=""><i data-fonte="" class="icone-links">M</i><p>ME ALERTE</p></a>
					</div>
				</section>
				<section class="anunciar-vaga">
					<a href="" class="bt-anunciar"><i data-fonte="" class="icone-anunciar">M</i>ANUNCIAR VAGA</a>
				</section>

				<!-- Aqui vem as mini mensagem -->
			</section>
			<section class="adm-terceiro-bloco">
				<!-- aqui vem os serviços -->
				<section class="servicos">
					<header class="titulo-servicos">
						<i data-fonte="" class="icone-servicos">M</i>
						<h1 class="titulo">SERVIÇOS ÚTEIS</h1>
					</header>
					<ul class="lista-servicos">
						<li class="servicos-item">
							<a href="" class="link-servicos">
								<figure class="baner-servicos" style=""></figure>
							</a>
						</li>
						<li class="servicos-item">
							<a href="" class="link-servicos">
								<figure class="baner-servicos"></figure>
							</a>
						</li>
						<li class="servicos-item">
							<a href="" class="link-servicos">
								<figure class="baner-servicos"></figure>
							</a>
						</li>
						<li class="servicos-item">
							<a href="" class="link-servicos">
								<figure class="baner-servicos"></figure>
							</a>
						</li>
					</ul>
					<div class="links">
						<a href="">MAIS SERVIÇOS</a>
						<a href="">ANUCIAR</a>
					</div>
				</section>

				<!-- Aqui vem os serviços -->
			</section>
		</div>
	</div>
</div>
@endsection
