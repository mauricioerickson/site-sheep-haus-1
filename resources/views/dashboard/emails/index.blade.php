@extends('../layouts.app')

@section('content')

<div class="caixa">

  @foreach ($mensagens as $mensagen)
    @if($mensagen->from == $from)
      <div class="from">
        {{ $mensagen->mensagem }}
      </div>
    @else
      <div class="to">
        {{ $mensagen->mensagem }}
      </div>
    @endif
  @endforeach

</div>
  {{ Form::open(array('route' => ['email', $to], 'method' => 'post')) }}
		{{ Form::hidden('from', $from) }}
    {{ Form::hidden('to', $to) }}
    {{ Form::hidden('property_id', $property_id) }}
    <div class="bloco-unico-formulario">
      {{ Form::text('mensagem',null, array('class' => 'input-padrao','placeholder' => 'Mensagem')) }}
    </div>
		{{ Form::submit('Enviar',['class'=>'botao-formulario-padrao']) }}
  {{ Form::close() }}
@endsection
