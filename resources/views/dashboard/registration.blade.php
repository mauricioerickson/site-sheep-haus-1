{{ Form::open(array('route' => 'teste')) }}
    {{ Form::text('name', $user->name) }}
    {{ Form::text('last_name', $user->last_name) }}
    {{ Form::text('email', $user->email, ['readonly']) }}
    {{ Form::label('university_id', 'Universidade') }}
    {{ Form::select('university_id', array('U' => 'Universidade Paulista')) }}
    {{ Form::label('course_id', 'Curso') }}
    {{ Form::select('course_id', array('E' => 'Engenharia elétrica')) }}
    {{ Form::label('habits_id', 'Hábitos') }}
    {{ Form::checkbox('Fumante', 'value') }}
    {{ Form::label('function', 'Ocupação') }}
    {{ Form::select('function', array('M' => 'Morador', 'P' => 'Proprietário', 'S' => 'Prestador de serviços')) }}
    {{ Form::label('gender', 'Gênero') }}
    {{ Form::select('gender', array('M' => 'Masculino', 'F' => 'Feminino', 'O' => 'Outros')) }}
    {{ Form::label('telephone', 'Telefone') }}
    {{ Form::text('telephone') }}
    {{ Form::label('cell_phone', 'Celular') }}
    {{ Form::text('cell_phone') }}
    {{ Form::label('birthday', 'Data de nascimento') }}
    {{ Form::text('birthday') }}
{{ Form::close() }}