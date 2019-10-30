@extends('../layouts.app')

@section('content')

<a href="{{ route('vacancies.create', [$property->property_id]) }}" class="btn btn-primary">Criar Vagas</a>



  @foreach ($vagas as $vaga)
  <div>
    <b>Titulo: </b> {{ $vaga->title }}
    <br />
    <b>Descição: </b> {{ $vaga->description }}
    <br />
    <b>Entrada: </b> {{ $vaga->entrance }}
    <br />
    <b>Saida: </b> {{ $vaga->exit }}
    <br />
    <b>Valor: </b> {{ $vaga->value }}

    <div>
      
      @if(!in_array($vaga->id, $vcontract))
        <a href="{{ route('match_vacancy', [$vaga->id]) }}" class="btn btn-danger">Ver Match</a>
        <a href="{{ route('vacancies.edit', [$vaga->id]) }}" class="btn btn-danger">Editar</a>

        {{ Form::open(array('route' => 'vacancy', 'method' => 'delete')) }}
          {{ Form::hidden('id', $vaga->id) }}
          {{ Form::submit('Remover Vaga', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
      
      @else
        <a href="{{ route('match_vacancy', [$vaga->id]) }}" class="btn btn-danger">Ver Morador</a>
      @endif

    </div>
    

  </div>
  @endforeach

@endsection

