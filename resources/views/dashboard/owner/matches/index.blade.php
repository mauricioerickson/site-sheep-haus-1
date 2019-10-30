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
    {{ Form::open(array('route' => 'contract', 'method' => 'post')) }}

    {{ Form::hidden('user_id', $dado->id) }}
    {{ Form::hidden('property_id', $property->id) }}

    {{ Form::submit('Assinar') }}

    {{ Form::close() }}
  @else
    {{ Form::open(array('route' => 'contract', 'method' => 'delete')) }}

    {{ Form::hidden('user_id', $dado->id) }}
    {{ Form::hidden('property_id', $property->id) }}

    {{ Form::submit('Cancelar') }}

    {{ Form::close() }}
  @endif
  
  
</div>

@endforeach


@endsection

