@extends('../layouts.app')

@section('content')

{{ Form::open(array('route' => 'vacancy', 'method' => 'post')) }}
  {{ Form::hidden('property_id', $property) }}
  {{ Form::hidden('user_id', $user->id) }}
  {{ Form::label('value', 'Valor') }}
  {{ Form::text('value') }}
  {{ Form::label('entrance', 'Entreda') }}
  {{ Form::text('entrance') }}
  {{ Form::label('exit', 'Saida') }}
  {{ Form::text('exit') }}
  {{ Form::label('title', 'Titulo') }}
  {{ Form::text('title') }}
  {{ Form::label('description', 'Descrição') }}
  {{ Form::text('description') }}
  {{ Form::submit('Salvar') }}
{{ Form::close() }}

@endsection

