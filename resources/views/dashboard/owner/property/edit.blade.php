@extends('../layouts.app')

@section('content')


  {{ Form::open(array('route' => ['property.update', $property->id], 'method' => 'put')) }}
      {{ Form::label('name', 'Nome') }}
      {{ Form::text('name', $property->name) }}
      <br />
      {{ Form::label('description', 'Descrição') }}
      {{ Form::text('description', $property->description) }}
      <br />
      {{ Form::label('type', 'Tipo de Imóvel') }}
      {{ Form::select('type', array(null => 'Selecione', 'A' => 'Apartamento', 'C' => 'Casa'), $property->type) }}
      <br />
      {{ Form::label('characteristics_id', 'Características') }}
      {{ Form::select('characteristics_id', $characteristics, $property->characteristics_id, array('multiple'=>'multiple','name'=>'characteristics_id[]')) }}
      <br />
      {{ Form::label('number_of_bedrooms', 'Numero de Quartos') }}
      {{ Form::text('number_of_bedrooms', $property->number_of_bedrooms) }}
      <br />
      {{ Form::label('number_of_bathrooms', 'Numero de Banhairos') }}
      {{ Form::text('number_of_bathrooms', $property->number_of_bathrooms) }}
      <br />
      {{ Form::label('number_of_residents', 'Numero de Moradores') }}
      {{ Form::text('number_of_residents', $property->number_of_residents) }}
      <br />
      {{ Form::label('property_size', 'Tamanho do Imóvel') }}
      {{ Form::text('property_size', $property->property_size) }}
      <br />
      {{ Form::submit('Salvar') }}

  {{ Form::close() }}

<br /><br /><br />
    <div id="map" style="width: 300px; height: 300px"></div>
    {{ Form::open(array('route' => ['property.update', $property->id], 'method' => 'put')) }}

        {{ Form::hidden('lng', $property->lng, array('id' => 'lng')) }}
        {{ Form::hidden('lat', $property->lat, array('id' => 'lat')) }}

        {{ Form::label('address', 'Endereço') }}
        {{ Form::text('address', $property->address, array('id' => 'autocomplete')) }}
        <br />
        {{ Form::label('cep', 'CEP') }}
        {{ Form::text('cep', $property->cep, array('id' => 'postal_code')) }}
        <br />
        {{ Form::label('district', 'Bairro') }}
        {{ Form::text('district', $property->district) }}
        <br />
        {{ Form::label('city', 'Cidade') }}
        {{ Form::text('city', $property->city, array('id' => 'locality')) }}
        <br />
        {{ Form::label('state', 'Estado') }}
        {{ Form::text('state', $property->state, array('id' => 'administrative_area_level_1')) }}
        <br />
        {{ Form::label('number', 'Numero') }}
        {{ Form::text('number', $property->number, array('id' => 'street_number')) }}
        <br />
        {{ Form::label('country', 'País') }}
        {{ Form::text('country', $property->country, array('id' => 'country')) }}
        <br />
        
        {{ Form::submit('Salvar') }}

    {{ Form::close() }}
<br /><br /><br />

<div>
    @foreach ($galleries as $gallery)
    {{ Form::open(array('route' => 'property-image', 'method' => 'delete')) }}
        {{ Form::hidden('property_id', $property->id) }}
        {{ Form::hidden('id', $gallery->id) }}
        <img src="/images/{{ $gallery->src }}" alt="" style="width: 100px; height: 100px">
        {{ Form::submit('X') }}
    {{ Form::close() }}
    @endforeach
</div>
{{ Form::open(array('route' => 'property-image', 'method' => 'post', 'enctype' => 'multipart/form-data')) }}

    {{ Form::hidden('property_id', $property->id) }}
    {{ Form::file('image') }}
    <br />
    {{ Form::submit('Salvar') }}

{{ Form::close() }}

<br /><br /><br />



<div>
    <div>
        @foreach ($habits as $habit)
            @if(!in_array($habit->id, $ihabits_id))
                {{ Form::open(array('route' => 'i_habit.store', 'method' => 'post')) }}
        
                {{ Form::hidden('property_id', $property->id) }}
                {{ Form::hidden('habit_id', $habit->id) }}
        
                {{ Form::label('name', $habit->name) }}
                
                {{ Form::submit('+') }}
        
                {{ Form::close() }}
            @else
                {{ Form::open(array('route' => 'i_habit.destroy', 'method' => 'delete')) }}

                {{ Form::hidden('property_id', $property->id) }}
                {{ Form::hidden('habit_id', $habit->id) }}
        
                {{ Form::label('name', $habit->name) }}
                
                {{ Form::submit('x') }}
        
                {{ Form::close() }}
            @endif
        @endforeach
    </div>
</div>


<br /><br /><br />

<div>
    @foreach ($accounts as $account)
    {{ Form::open(array('route' => 'property-account', 'method' => 'delete')) }}
        {{ Form::hidden('property_id', $property->id) }}
        {{ Form::hidden('id', $account->id) }}
        <div>
            {{ $account->name }}
            {{ $account->value }}
            {{ $account->duedate }}
        </div>
        {{ Form::submit('X') }}
    {{ Form::close() }}
    @endforeach
</div>
{{ Form::open(array('route' => 'property-account', 'method' => 'post')) }}

    {{ Form::hidden('property_id', $property->id) }}

    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name') }}
    <br />
    {{ Form::label('value', 'Valor') }}
    {{ Form::text('value') }}
    <br />
    {{ Form::label('duedate', 'Data de vencimento') }}
    {{ Form::text('duedate') }}
    <br />
    {{ Form::submit('Salvar') }}

{{ Form::close() }}

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection

