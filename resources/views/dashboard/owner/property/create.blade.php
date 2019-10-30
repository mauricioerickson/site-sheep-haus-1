@extends('../layouts.app')

@section('content')
<!-- cadastro do imovel aqui -->
<section class="bloco--cadastro-imovel">
<div class="centralizar">
	{{ Form::open(array('route' => 'property.store', 'method' => 'post')) }}
		<section class="formulario--cadastro">
			<header class="cadastro-titulo">
				<div class="icones">
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
				</div>
				<h1 class="titulo">Como é seu imóvel</h1>
			</header>
			<div class="bloco-meio-formulario">
				{{ Form::text('name', null, array('class' => 'input-padrao','placeholder' => 'NOME')) }}
			</div>
			<div class="bloco-meio-formulario">
				{{ Form::select('type', array(null => 'Tipo de imovel', 'A' => 'Apartamento', 'C' => 'Casa'),null,['class'=>'select-padrao']) }}
			</div>
			<div class="bloco-unico-formulario">
				{{ Form::text('description', null, array('class' => 'input-padrao', 'placeholder' => 'DESCRIÇÂO')) }}
			</div>
			<div class="bloco-unico-formulario">
				<?php foreach ($characteristics as $valor): ?>
					<label for="$valor" class="label-check-button">
						{{ Form::checkbox('characteristics_id', $valor) }} {{$valor}}
					</label>
				<?php endforeach; ?>
			</div>
			<div class="bloco-quarto-formulario">
					{{ Form::text('number_of_bedrooms',null,array('class'=>'input-padrao','placeholder'=>'Nº DE QUARTOS')) }}
			</div>
			<div class="bloco-quarto-formulario">
					{{ Form::text('number_of_bathrooms',null,array('class'=>'input-padrao','placeholder'=>'Nº DE BANHEIROS')) }}
			</div>
			<div class="bloco-quarto-formulario">
					{{ Form::text('number_of_residents',null,array('class'=>'input-padrao','placeholder'=>'Nº DE MORADORES')) }}
			</div>
			<div class="bloco-quarto-formulario">
					{{ Form::text('property_size',null,array('class'=>'input-padrao','placeholder'=>'TAMANHO IMÓVEL')) }}
					<span>Ex: 72m²</span>
			</div>
			<div class="bloco-unico-formulario">
				{{ Form::submit('Salvar',['class'=>'botao-formulario-padrao']) }}
			</div>
			{{ Form::close() }}
		</section>
		<section class="formulario--cadastro">
			<header class="cadastro-titulo">
				<div class="icones">
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
				</div>
				<h1 class="titulo">Como é seu imóvel</h1>
			</header>
			<div class="bloco-terco-formulario">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10858.300202298426!2d-47.86967170312832!3d-15.804541795319567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a309ae31de7d3%3A0xc7c45a6f5981ca10!2sPal%C3%A1cio+do+Planalto!5e0!3m2!1spt-BR!2sbr!4v1565924493620!5m2!1spt-BR!2sbr" width="100%" height="280px" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="bloco-terco-formulario localizacao">
				<input type="number" name="cep" class="input-padrao" placeholder="CEP">
				<input type="text" name="endereco" class="input-padrao" placeholder="ENDEREÇO">
				<input type="text" name="bairro" class="input-padrao" placeholder="BAIRRO">
				<input type="text" name="cidade" class="input-padrao" placeholder="CIDADE">
				<input type="number" name="endereco_numero" class="input-padrao" placeholder="NUMERO">
			</div>
			<div class="bloco-terco-formulario">
				<label for="foto_imovel" class="foto-imovel">
					<figure class="imovel-bg" style="'puxar foto aqui com background-imag'">
					</figure>
					<input type="text" class="input-padrao" name="" value="" placeholder="ADICIONAR FOTO">
					<i data-font="&#xf07b;" class="icone-formulario"></i>
					<input type="file" id="foto_imovel" name="foto_imovel" value="">
				</label>
			</div>
			<div class="bloco-unico-formulario">
				<button name="button" class="botao-formulario-padrao"><i data-fonte="&#xf060;" class="icone-botao-voltar"></i>VOLTAR</button>
				<button name="button" class="botao-formulario-padrao">PRÓXIMO</button>
			</div>
		</section>
		<section class="formulario--cadastro">
			<header class="cadastro-titulo">
				<div class="icones">
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
				</div>
				<h1 class="titulo">Contas do imóvel</h1>
			</header>
			<div class="bloco-terco-formulario">
				<div class="pos-span">
					<input type="text" class="input-padrao" name="nome_conta_imovel" value="" placeholder="NOME DA CONTA">
					<span>Ex: Aluguel</span>
				</div>
				<div class="pos-span">
					<input type="number" class="input-padrao" name="valor_conta_imovel" value="" placeholder="VALOR DA CONTA">
					<span>Ex: R$ 300,50</span>
				</div>
				<label for="data_vencimento" class="label-texto">DATA DE VENCIMENTO</label>
				<input type="date" name="data_vencimento_imovel" class="input-data" required="required">
				<div class="contas-adicionar">
					<i class="bt-adicionar" data-font="">+</i><p class="texto">ADICIONAR</p>
				</div>
			</div>
			<div class="bloco-terco-formulario localizacao">

			</div>
			<div class="bloco-terco-formulario">
				<ul class="formulario-contas-lista">
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
					<li class="contas-item">
						<div class="contas-remover">
							<p class="texto">NOME DA CONTA</p><i class="bt-remover">-</i>
						</div>
					</li>
				</ul>
			</div>
			<div class="bloco-unico-formulario">
				<button name="button" class="botao-formulario-padrao"><i data-fonte="&#xf060;" class="icone-botao-voltar"></i>VOLTAR</button>
				<button name="button" class="botao-formulario-padrao">PRÓXIMO</button>
			</div>
		</section>
		<section class="formulario--cadastro">
			<header class="cadastro-titulo">
				<div class="icones">
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
				</div>
				<h1 class="titulo">Perfil desejado para moradores</h1>
			</header>
			<div class="bloco-terco-formulario">
				<div class="pos-span">
					<input type="text" class="input-padrao" name="faculdade" value="" placeholder="NOME DA FACULDADE">
				</div>
				<div class="pos-span">
					<input type="text" class="input-padrao" name="curso" value="" placeholder="CURSO">
				</div>
			</div>
			<div class="bloco-terco-formulario localizacao">
				<label for="fumante" class="label-check-button">
					<input type="checkbox" id="fumante" name="perfil_imovel" value="1"> fumante
				</label>
				<label for="animal" class="label-check-button">
					<input type="checkbox" id="animal" name="perfil_imovel" value="2">  Tenho animal
				</label>
				<label for="balada" class="label-check-button">
					<input type="checkbox" id="balada" name="perfil_imovel" value="3">  gosto de balada
				</label>
				<label for="show" class="label-check-button">
					<input type="checkbox" id="show" name="perfil_imovel" value="4"> gosto de show
				</label>
				<label for="caseiro" class="label-check-button">
					<input type="checkbox" id="caseiro" name="perfil_imovel" value="4"> Sou caseiro
				</label>
			</div>
			<div class="bloco-terco-formulario">
				<label for="bebida" class="label-check-button">
					<input type="checkbox" id="bebida" name="perfil_imovel" value="5"> Consumo bebida alcoólica
				</label>
				<label for="carro" class="label-check-button">
					<input type="checkbox" id="carro" name="perfil_imovel" value="6">  Tenho carro
				</label>
				<label for="vegetariano" class="label-check-button">
					<input type="checkbox" id="vegetariano" name="perfil_imovel" value="7">  Sou vegetariano
				</label>
				<label for="solteiro" class="label-check-button">
					<input type="checkbox" id="solteiro" name="perfil_imovel" value="8">  Solteiro
				</label>
				<label for="namorando" class="label-check-button">
					<input type="checkbox" id="namorando" name="perfil_imovel" value="9">  Namorando
				</label>
			</div>
			<div class="bloco-unico-formulario">
				<button name="button" class="botao-formulario-padrao"><i data-fonte="&#xf060;" class="icone-botao-voltar"></i>VOLTAR</button>
				<button type="submit" name="button" class="botao-formulario-padrao">CONCLUIR</button>
			</div>
		</section>
		<section class="formulario--cadastro">
			<div class="formulario-concluido">
				<header class="cadastro-titulo">
					<div class="icones">
						<i data-font="" class="icone-formulario-concluido">M</i>
					</div>
					<h1 class="titulo">PARABÉNS</h1>
					<h1 class="titulo">VOCÊ CRIOU SEU IMÓVEL AGORA ESTÁ NA HORA DE CRIAR AS VAGAS OU PROCURAR MORADORES!</h1>
				</header>
				<div class="bloco-unico-formulario">
					<a href="" class="botao-formulario-padrao">CIRAR DEPOIS</a>
					<a href="" class="botao-formulario-padrao">CRIAR VAGAS</a>
				</div>
				<div class="bloco-unico-formulario">
					<a href="" class="botao-formulario-padrao">PROCURAR MORADOR</a>
				</div>
			</div>
		</section>
</div>
</section>

<!-- cadastro do imovel aqui -->
  {{ Form::open(array('route' => 'property.store', 'method' => 'post')) }}
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name') }}
    <br />
    {{ Form::label('description', 'Descrição') }}
    {{ Form::text('description') }}
    <br />
    {{ Form::label('type', 'Tipo de Imóvel') }}
    {{ Form::select('type', array(null => 'Selecione', 'A' => 'Apartamento', 'C' => 'Casa')) }}
    <br />
    {{ Form::label('characteristics_id', 'Características') }}
    {{ Form::select('characteristics_id', $characteristics, null, array('multiple'=>'multiple','name'=>'characteristics_id[]')) }}
    <br />
    {{ Form::label('number_of_bedrooms', 'Numero de Quartos') }}
    {{ Form::text('number_of_bedrooms') }}
    <br />
    {{ Form::label('number_of_bathrooms', 'Numero de Banheiros') }}
    {{ Form::text('number_of_bathrooms') }}
    <br />
    {{ Form::label('number_of_residents', 'Numero de Moradores') }}
    {{ Form::text('number_of_residents') }}
    <br />
    {{ Form::label('property_size', 'Tamanho do Imóvel') }}
    {{ Form::text('property_size') }}
    <br />
    {{ Form::submit('Salvar') }}

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

{{ Form::close() }}

@endsection
