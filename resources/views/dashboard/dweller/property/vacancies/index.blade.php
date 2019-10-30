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
      <a href="{{ route('vacancies.edit', [$vaga->id]) }}" class="btn btn-danger">Editar</a>

      {{ Form::open(array('route' => 'vacancy', 'method' => 'delete')) }}
        {{ Form::hidden('id', $vaga->id) }}
        {{ Form::submit('Remover Vaga', ['class' => 'btn btn-danger']) }}
      {{ Form::close() }}
      
    </div>
    

  </div>
  @endforeach

@endsection

