@extends('../layouts.app')

@section('content')

@foreach ($users as $user)

<div>
    {{ $user->name }}
    
    @if(!in_array($user->id, $alerts))
      {{ Form::open(array('route' => 'alert.store', 'method' => 'post')) }}
        {{ Form::hidden('property_id', $property) }}
        {{ Form::hidden('user_id', $user->id) }}
        {{ Form::submit('Match') }}
      {{ Form::close() }}
    @endif
<br />
</div>
    
@endforeach

@endsection

