@extends('../layouts.app')

@section('content')
<div class="container">
	<div class="flex-center position-ref full-height">
		<div class="content centralizar bloco-adm">
			<section class="adm-unico-bloco">
				<header class="adm-breadcrumb">Dashboard</header>
				<div class="card-body">
					<a href="{{ route('SeggestedProperties') }}" class="btn btn-primary">Imóveis Sugeridos</a>
				</div>
			</section>
			<section class="adm-primeiro-bloco">
				<!-- aqui vem o adm de morador padrao -->

				<section class="adm-moradores">
					<header class="titulo-contas">
						<h1 class="titulo">VAGAS</h1>
						<a href="" class="adicionar"><i data-fonte="" class="icone">M</i><span> ADICIONAR MORADORES</span></a>
					</header>
					<section class="bloco-meio">
						<header class="adm-moradores_topo">
							<figure style="background-image: url('images/baners/imovel_1.jpg')"></figure>
							<div class="separador-texto">
								<h1 class="titulo">João da Silva</h1>
								<p class="texto">Email@emaildousuario)</p>
								<p class="texto">Tel. 555555555</p>
							</div>
						</header>
						<form action="">
							<section class="formulario--cadastro adm">
								<div class="bloco-unico-formulario">
									<input type="text" name="nome_faculdade" class="input-padrao" placeholder="NOME DA FACULDADE" disabled>
								</div>
								<div class="bloco-unico-formulario">
									<input type="text" name="curso" class="input-padrao" placeholder="CURSO" disabled>
								</div>
								<div class="preferencias">
									<ul class="lista-preferencias">
										<li>- MASCULINO</li>
										<li>- NÃO FUMANTE</li>
										<li>- GOSTA DE BALADA</li>
										<li>- SOLTEIRO</li>
										<li>- POSSUI CARRO</li>
									</ul>
									<a href="" class="remover"><i data-fonte="" class="icone">M</i><span> APAGAR</span></a>
								</div>
							</section>
						</form>
					</section>
					<section class="bloco-meio">
						<header class="adm-moradores_topo">
							<figure style="background-image: url('images/baners/imovel_1.jpg')"></figure>
							<div class="separador-texto">
								<h1 class="titulo">João da Silva</h1>
								<p class="texto">Email@emaildousuario)</p>
								<p class="texto">Tel. 555555555</p>
							</div>
						</header>
						<form action="">
							<section class="formulario--cadastro adm">
								<div class="bloco-unico-formulario">
									<input type="text" name="nome_faculdade" class="input-padrao" placeholder="NOME DA FACULDADE" disabled>
								</div>
								<div class="bloco-unico-formulario">
									<input type="text" name="curso" class="input-padrao" placeholder="CURSO" disabled>
								</div>
								<div class="preferencias">
									<ul class="lista-preferencias">
										<li>- MASCULINO</li>
										<li>- NÃO FUMANTE</li>
										<li>- GOSTA DE BALADA</li>
										<li>- SOLTEIRO</li>
										<li>- POSSUI CARRO</li>
									</ul>
									<a href="" class="remover"><i data-fonte="" class="icone">M</i><span> APAGAR</span></a>
								</div>
							</section>
						</form>
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
