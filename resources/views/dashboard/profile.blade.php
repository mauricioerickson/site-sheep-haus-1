@extends('../layouts.app')

@section('content')

{{ Form::open(array('route' => 'profile', 'method' => 'put')) }}
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', $user->name) }}
    <br />
    {{ Form::label('last_name', 'Último Nome') }}
    {{ Form::text('last_name', $user->last_name) }}
    <br />
    {{ Form::label('email', 'E-mail') }}
    {{ Form::text('email', $user->email, ['readonly']) }}
    <br />
    {{ Form::label('university_id', 'Universidade') }}
    {{ Form::text('university_id', $user->university_id, array('id' => 'college_id', 'data-route' => route('CollegeAutocomplete'))) }}
    <br />
    {{ Form::label('course_id', 'Curso') }}
    {{ Form::text('course_id', $user->course_id, array('id' => 'course_id', 'data-route' => route('CourseAutocomplete'))) }}
    <br />
    {{ Form::label('habits_id', 'Hábitos') }}
    {{ Form::select('habits_id', $habits, $user->habits_id, array('multiple'=>'multiple','name'=>'habits_id[]')) }}
    <br />
    @if($user->function === null)
    {{ Form::label('function', 'Ocupação') }}
    {{ Form::select('function', array(null => 'Selecione', 'M' => 'Morador', 'P' => 'Proprietário', 'S' => 'Prestador de serviços')) }}
    <br />
    @endif
    @if($user->gender === null)
    {{ Form::label('gender', 'Gênero') }}
    {{ Form::select('gender', array(null => 'Selecione', 'M' => 'Masculino', 'F' => 'Feminino', 'O' => 'Outros'), $user->gender) }}
    <br />
    @endif
    {{ Form::label('telephone', 'Telefone') }}
    {{ Form::text('telephone', $user->telephone) }}
    <br />
    {{ Form::label('cell_phone', 'Celular') }}
    {{ Form::text('cell_phone', $user->cell_phone) }}
    <br />
    {{ Form::label('birthday', 'Data de nascimento') }}
    {{ Form::text('birthday', $user->birthday) }}

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <br />
    {{ Form::submit('Salvar') }}
    {{ Form::close() }}

@endsection