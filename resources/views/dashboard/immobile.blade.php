@extends('../layouts.app')

@section('content')

@if(!$id)
  {{ Form::open(array('route' => 'property', 'method' => 'post')) }}
@else
  {{ Form::open(array('route' => ['property', $property->id], 'method' => 'put')) }}
@endif
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

@if($id)
<br /><br /><br />
{{ Form::open(array('route' => ['property', $property->id], 'method' => 'put')) }}

    {{ Form::label('address', 'Endereço') }}
    {{ Form::text('address') }}
    <br />
    {{ Form::label('cep', 'CEP') }}
    {{ Form::text('cep') }}
    <br />
    {{ Form::label('district', 'Bairro') }}
    {{ Form::text('district') }}
    <br />
    {{ Form::label('city', 'Cidade') }}
    {{ Form::text('city') }}
    <br />
    {{ Form::label('number', 'Numero') }}
    {{ Form::text('number') }}
    <br />
    {{ Form::submit('Salvar') }}

{{ Form::close() }}
<br /><br /><br />
{{ Form::open(array('route' => ['property', $property->id], 'method' => 'put', 'files' => true, 'enctype' => 'multipart/form-data')) }}
    
    {{ Form::file('gallery_id', array('multiple'=>'multiple','name'=>'gallery_id[]')) }}
    <br />
    <br />
    <br />
    <br />
    <br />
    {{ Form::label('university_id', 'Nome da Faculdade') }}
    {{ Form::text('university_id', $property->university_id, array('id' => 'college_id', 'data-route' => route('CollegeAutocomplete'))) }}
    <br />
    {{ Form::label('course_id', 'Curso') }}
    {{ Form::text('course_id', $property->course_id, array('id' => 'course_id', 'data-route' => route('CourseAutocomplete'))) }}
    <br />
    {{ Form::label('habits_id', 'Habitos') }}
    {{ Form::select('habits_id', $habits, $property->habits_id, array('multiple'=>'multiple','name'=>'habits_id[]')) }}
    <br />
    {{ Form::submit('Salvar') }}

{{ Form::close() }}
@endif


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