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
        				<h1 class="titulo">Dê Match e more com quem combina com você.</h1>
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
	</div>
</div>
@endsection
