@extends('../layouts.app')

@section('content')

@foreach ($dados as $dado)
    
<div>
  Morador: {{ $dado->name }}
  <br />
  Email: {{ $dado->email }}
  <br />
  Telefone: {{ $dado->cell_phone }}
  <br />
  @if(empty($contract))
    {{ Form::open(array('route' => 'v_contract', 'method' => 'post')) }}

    {{ Form::hidden('user_id', $dado->id) }}
    {{ Form::hidden('vacancy_id', $vacancy->id) }}
    {{ Form::hidden('property_id', $vacancy->property_id) }}

    {{ Form::submit('Assinar') }}

    {{ Form::close() }}
  @else
    {{ Form::open(array('route' => 'v_contract', 'method' => 'delete')) }}

    {{ Form::hidden('user_id', $dado->id) }}
    {{ Form::hidden('vacancy_id', $vacancy->id) }}

    {{ Form::submit('Cancelar') }}

    {{ Form::close() }}
  @endif
  
  
</div>

@endforeach


@endsection

