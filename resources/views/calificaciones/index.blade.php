@extends('evaluadores')

@section('titulo')
    <h1>Evaluaciones</h1>
@stop

@section('content')

    <br><br>
    <a href="{{ url('evaluaciones/create') }}" class="btn btn-lg btn-primary">Evaluar un proyecto <i class="fa fa-arrow-right"></i> </a>



@stop

@section('scripts')
    <script>
        $("#li-evaluaciones").addClass('active');
    </script>
@stop