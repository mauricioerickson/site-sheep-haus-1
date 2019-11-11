@extends('../layouts.app')

@section('content')
<section class="bloco--cadastro-vaga">
	<div class="centralizar">

		{{ Form::open(array('route' => 'vacancy', 'method' => 'put')) }}
		 {{ Form::hidden('id', $vaga->id) }}
		<section class="formulario--cadastro">
			<header class="cadastro-titulo">
				<div class="icones">
					<i data-font="" class="icone-formulario">M</i>
					<i data-font="" class="icone-formulario">M</i>
				</div>
				<h1 class="titulo">Como é sua vaga</h1>
			</header>
			<div class="bloco-unico-formulario">
				{{ Form::text('title', $vaga->title, array('class' => 'input-padrao','placeholder' => 'TITULO DA VAGA')) }}
			</div>
			<div class="bloco-unico-formulario">
				{{ Form::text('description', $vaga->description, array('class' => 'input-padrao','placeholder' => 'TITULO DA VAGA')) }}
			</div>
			<div class="bloco-terco-formulario">
				{{ Form::text('value', $vaga->value, array('class' => 'input-padrao','placeholder' => 'VALOR ALUGUEL')) }}
			</div>
			<div class="bloco-terco-formulario">
				{{ Form::text('entrance', $vaga->entrance, array('class' => 'input-padrao','placeholder' => 'VALOR ALUGUEL')) }}
			</div>
			<div class="bloco-terco-formulario">
				 {{ Form::text('exit', $vaga->exit,array('class' => 'input-padrao','placeholder' => 'DATA DE SAIDA')) }}
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
				</div>
				<h1 class="titulo">Habitos aceitos na sua vaga</h1>
			</header>
			<div class="bloco-unico-formulario">
				@foreach ($habits as $habit)
					@if(!in_array($habit->id, $vhabits))
						{{ Form::open(array('class'=>'label-add','route' => 'v_habit.store', 'method' => 'post')) }}

						{{ Form::hidden('property_id', $vaga->property_id) }}
						{{ Form::hidden('habit_id', $habit->id) }}

						{{ Form::label('name', $habit->name) }}

						{{ Form::submit('+',['class'=>'add-padrao']) }}

						{{ Form::close() }}
					@else
						{{ Form::open(array('class'=>'label-add','route' => 'v_habit.destroy', 'method' => 'delete')) }}

						{{ Form::hidden('property_id', $vaga->property_id) }}
						{{ Form::hidden('habit_id', $habit->id) }}

						{{ Form::label('name', $habit->name) }}

						{{ Form::submit('-',['class'=>'remove-padrao']) }}

						{{ Form::close() }}
					@endif
				@endforeach
			</div>
		</section>
	</div>
</section>
@endsection
