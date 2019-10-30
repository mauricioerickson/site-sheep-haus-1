@extends('../layouts.app')

@section('content')

{{ Form::open(array('route' => 'vacancy', 'method' => 'put')) }}
  {{ Form::hidden('id', $vaga->id) }}
  {{ Form::label('value', 'Valor') }}
  {{ Form::text('value', $vaga->value) }}
  {{ Form::label('entrance', 'Entreda') }}
  {{ Form::text('entrance', $vaga->entrance) }}
  {{ Form::label('exit', 'Saida') }}
  {{ Form::text('exit', $vaga->exit) }}
  {{ Form::label('title', 'Titulo') }}
  {{ Form::text('title', $vaga->title) }}
  {{ Form::label('description', 'Descrição') }}
  {{ Form::text('description', $vaga->description) }}
  {{ Form::submit('Salvar') }}
{{ Form::close() }}

<div>
  <div>
      @foreach ($habits as $habit)
          @if(!in_array($habit->id, $vhabits))
              {{ Form::open(array('route' => 'v_habit.store', 'method' => 'post')) }}
      
              {{ Form::hidden('property_id', $vaga->property_id) }}
              {{ Form::hidden('habit_id', $habit->id) }}
      
              {{ Form::label('name', $habit->name) }}
              
              {{ Form::submit('+') }}
      
              {{ Form::close() }}
          @else
              {{ Form::open(array('route' => 'v_habit.destroy', 'method' => 'delete')) }}

              {{ Form::hidden('property_id', $vaga->property_id) }}
              {{ Form::hidden('habit_id', $habit->id) }}
      
              {{ Form::label('name', $habit->name) }}
              
              {{ Form::submit('x') }}
      
              {{ Form::close() }}
          @endif
      @endforeach
  </div>
</div>

@endsection

