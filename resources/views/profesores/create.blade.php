@extends('profesores')

@section('titulo')
    <h1>Agregar un proyecto</h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <p style="color: red;">* Campos obligatorios</p>
@stop

@section('content')

    {!! Form::open(['url' => 'profesores', 'method' => 'POST']) !!}

    @if ( $errors->any() )
        <ul class="alert alert-danger">
            <li> Tienes que rellenar todos los campos obligatorios </li>
        </ul>
    @endif

    <div class="row">
        <div class="col-lg-6">
            <h3>Proyecto (especificaciones):</h3>

            <br>

            <div class="form-group">
                {!! Form::label('proyecto', 'Nombre *') !!}
                {!! Form::text('proyecto', null, ['class' => 'form-control', 'placeholder' => 'Nombre del proyecto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción *') !!}
                {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('materia', 'Materia *') !!}
                {!! Form::text('materia', null, ['class' => 'form-control', 'placeholder' => 'Materia principal del proyecto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('otras_materias', 'Otras materias') !!}
                {!! Form::text('otras_materias', null, ['class' => 'form-control', 'placeholder' => 'Otras materias del proyecto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('profesor', 'Profesor *') !!}
                {!! Form::text('profesor', null, ['class' => 'form-control', 'placeholder' => 'Profesor encargado del proyecto...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('otros_profesores', 'Otros profesores') !!}
                {!! Form::text('otras_profesores', null, ['class' => 'form-control', 'placeholder' => 'Otras profesores encargados...']) !!}
            </div>

        </div>
        <div class="col-lg-4 col-xs-8">
            <h3>Equipo (alumnos):</h3>

            <br>

            <div class="form-group">
                {!! Form::label('alumno1', 'Integrante 1 *') !!}
                {!! Form::text('alumno1', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('alumno2', 'Integrante 2') !!}
                {!! Form::text('alumno2', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('alumno3', 'Integrante 3') !!}
                {!! Form::text('alumno3', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('alumno4', 'Integrante 4') !!}
                {!! Form::text('alumno4', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('alumno5', 'Integrante 5') !!}
                {!! Form::text('alumno5', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('alumno6', 'Integrante 6') !!}
                {!! Form::text('alumno6', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-lg-1 col-xs-2">
            <h3>Carreras:</h3>

            <br>

            <div class="form-group">
                {!! Form::label('carrera1', '(siglas)') !!}
                {!! Form::text('carrera1', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('carrera2', '(siglas)') !!}
                {!! Form::text('carrera2', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('carrera3', '(siglas)') !!}
                {!! Form::text('carrera3', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('carrera4', '(siglas)') !!}
                {!! Form::text('carrera4', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('carrera5', '(siglas)') !!}
                {!! Form::text('carrera5', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('carrera6', '(siglas)') !!}
                {!! Form::text('carrera6', null, ['class' => 'form-control']) !!}
            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-lg-10">
        </div>
        <div class="col-lg-2">
            <br>
            <div class="form-group">
                {!! Form::submit('Agregar proyecto', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@stop

@section('scripts')

    <script>
        $("#li-proyectos").addClass('active');
    </script>

@stop