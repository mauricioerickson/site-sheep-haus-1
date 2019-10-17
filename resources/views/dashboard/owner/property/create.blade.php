@extends('../layouts.app')

@section('content')

  {{ Form::open(array('route' => 'property.create', 'method' => 'post')) }}
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
    {{ Form::label('number_of_bathrooms', 'Numero de Banhairos') }}
    {{ Form::text('number_of_bathrooms') }}
    <br />
    {{ Form::label('number_of_residents', 'Numero de Moradores') }}
    {{ Form::text('number_of_residents') }}
    <br />
    {{ Form::label('property_size', 'Tamanho do Imóvel') }}
    {{ Form::text('property_size') }}
    <br />
    {{ Form::submit('Salvar') }}

{{ Form::close() }}

@endsection

