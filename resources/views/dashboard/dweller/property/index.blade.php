@extends('../layouts.app')

@section('content')

@if(!empty($property))
  <div>
    @foreach ($property->galeries as $key => $item)
      @if($key === 0)
        <img src="/images/{{ $item->src }}" alt="" style="width: 100px; height: 100px">
      @endif
    @endforeach
    {{ $property->name }}
    {{ $property->description }}
    @if(!in_array($property->id ,$match))
      {{ Form::open(array('route' => 'match', 'method' => 'post')) }}
          {{ Form::hidden('property_id', $property->id) }}
          {{ Form::submit('Macth') }}
      {{ Form::close() }}
    @endif

    @foreach ($property->galeries as $key => $item)
      @if($key === 0)
        <img src="/images/{{ $item->src }}" alt="" style="width: 100px; height: 100px">
      @endif 
    @endforeach
    {{ $property->name }}
    {{ $property->description }}
    
    <a href="{{ route('vacancies') }}" class="btn btn-primary">Vagas</a>
   
  </div>
@endif

@endsection
