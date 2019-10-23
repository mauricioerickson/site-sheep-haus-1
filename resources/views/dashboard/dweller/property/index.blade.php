@extends('../layouts.app')

@section('content')


@foreach ($properties as $property)
  <div>
      @foreach ($property->galeries as $key => $item)
        @if($key === 0)
          <img src="/images/{{ $item->src }}" alt="" style="width: 100px; height: 100px">
        @endif 
      @endforeach
      {{ $property->name }}
      {{ $property->description }}
  </div>
@endforeach

@endsection

