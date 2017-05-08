@extends('profesores')


@section('titulo')
    <h1>{{ $proyecto->proyecto }}</h1>
@stop

@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-6">
            <p><b>Descripción:</b></p>
            <p>{{ $proyecto->descripcion }}</p>
            <br>

            <p><b>Materia:</b></p>
            <p>{{ $proyecto->materia }}</p>
            <br>

            <p><b>Otras materias:</b></p>
            <p>{{ $proyecto->otras_materias }}</p>
            <br>

            <p><b>Profesor:</b></p>
            <p>{{ $proyecto->profesor }}</p>
            <br>

            <p><b>Otras profesores:</b></p>
            <p>{{ $proyecto->otras_profesores }}</p>
            <br>

            <p><b>Alumnos:</b></p>
            <p>{{ $proyecto->alumno1 }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $proyecto->carrera1 }}</p>
            <p>{{ $proyecto->alumno2 }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $proyecto->carrera2 }}</p>
            <p>{{ $proyecto->alumno3 }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $proyecto->carrera3 }}</p>
            <p>{{ $proyecto->alumno4 }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $proyecto->carrera4 }}</p>
            <p>{{ $proyecto->alumno5 }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $proyecto->carrera5 }}</p>
            <p>{{ $proyecto->alumno6 }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $proyecto->carrera6 }}</p>
            <br>
        </div>
    </div>


@stop

@section('scripts')

    <script>
        $("#li-proyectos").addClass('active');
    </script>

@stop