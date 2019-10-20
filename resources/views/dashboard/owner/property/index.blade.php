@extends('../layouts.app')

@section('content')

@foreach ($properties as $property)
    <div>
      {{ Form::open(array('route' => 'property.delete', 'method' => 'delete')) }}
        {{ Form::hidden('property_id', $property->property->id) }}
        @if($property->gallery)
          <img src="/images/{{ $property->gallery->src }}" alt="" style="width: 100px; height: 100px">
        @endif 
          {{ $property->property->description }}
          {{ $property->property->number_of_bathrooms }}
          {{ $property->property->number_of_residents }}
        <a href="{{ route('property.edit', $property->property->id ) }}">
          Editar
        </a>
        {{ Form::submit('X') }}
      {{ Form::close() }}
      

    </div>
@endforeach

@endsection

