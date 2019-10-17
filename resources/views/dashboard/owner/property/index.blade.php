@extends('../layouts.app')

@section('content')

@foreach ($properties as $property)
    <div>
      <img src="/images/{{ $property->gallery->src }}" alt="" style="width: 100px; height: 100px"> 
      {{ $property->property->description }}
      {{ $property->property->number_of_bathrooms }}
      {{ $property->property->number_of_residents }}
      <a href="{{ route('property.edit', $property->property->id ) }}">
        Editar
      </a>
    </div>
@endforeach

@endsection

