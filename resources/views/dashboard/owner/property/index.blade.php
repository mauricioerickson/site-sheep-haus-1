@extends('../layouts.app')

@section('content')

@foreach ($properties as $property)
    <div>
      {{ Form::open(array('route' => 'property.destroy', 'method' => 'delete')) }}
        {{ Form::hidden('property_id', $property->id) }}

        @foreach ($property->galeries as $key => $item)
          @if($key === 0)
            <img src="/images/{{ $item->src }}" alt="" style="width: 100px; height: 100px">
          @endif 
        @endforeach
        
          {{ $property->description }}
          {{ $property->number_of_bathrooms }}
          {{ $property->number_of_residents }}
        <a href="{{ route('property.edit', $property->id ) }}">
          Editar
        </a>
        {{ Form::submit('X') }}
      {{ Form::close() }}

      <a href="{{ route('match_property', [$property->id]) }}">
        Ver Matchs
      </a>
      


    </div>
@endforeach

@endsection

