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
</div>

@endforeach


@endsection

