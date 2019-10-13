@extends('../layouts.app')

@section('content')
{{ Form::open(array('route' => 'registration', 'method' => 'post')) }}
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
    {{ Form::text('university_id', null, array('id' => 'college_id', 'data-route' => route('CollegeAutocomplete'))) }}
    <br />
    {{ Form::label('course_id', 'Curso') }}
    {{ Form::text('course_id', null, array('id' => 'course_id', 'data-route' => route('CourseAutocomplete'))) }}
    <br />
    {{ Form::label('habits_id', 'Hábitos') }}
    {{ Form::select('habits_id', $habits, null, array('multiple'=>'multiple','name'=>'habits_id[]')) }}
    <br />
    {{ Form::label('function', 'Ocupação') }}
    {{ Form::select('function', array('M' => 'Morador', 'P' => 'Proprietário', 'S' => 'Prestador de serviços')) }}
    <br />
    {{ Form::label('gender', 'Gênero') }}
    {{ Form::select('gender', array('M' => 'Masculino', 'F' => 'Feminino', 'O' => 'Outros')) }}
    <br />
    {{ Form::label('telephone', 'Telefone') }}
    {{ Form::text('telephone') }}
    <br />
    {{ Form::label('cell_phone', 'Celular') }}
    {{ Form::text('cell_phone') }}
    <br />
    {{ Form::label('birthday', 'Data de nascimento') }}
    {{ Form::text('birthday') }}

    <br />
    {{ Form::submit('Salvar') }}
{{ Form::close() }}

@endsection