@extends('app')

@section('titulo')
    <h1>Todos los usuarios</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-4">
            {!! Form::model($usuario, ['method' => 'PATCH', 'action' => ['UsuariosController@update', $usuario->id] ]) !!}

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('apellidos', 'Apellidos') !!}
                {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('privilegio', 'Privilegio') !!}
                {!! Form::input('number', 'privilegio') !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            @if ( $errors->any() )
                <ul class="alert alert-danger">
                    @foreach ( $errors->all() as $error )
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $("#li-usuarios").addClass('active');
    </script>
@stop