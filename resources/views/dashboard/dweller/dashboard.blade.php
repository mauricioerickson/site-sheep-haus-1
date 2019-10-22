@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <a href="{{ route('SeggestedProperties') }}" class="btn btn-primary">Imóveis Sugeridos</a>
                </div>
                <div class="edit-button">
                    <a href="{{ route('profile') }}" class="btn btn-primary">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
