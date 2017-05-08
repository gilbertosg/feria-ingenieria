@extends('app')

@section('titulo')
    <h1>Criterios</h1>
@stop

@section('content')

    {!! Form::open(['url' => 'criterios', 'method' => 'POST']) !!}

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                {!! Form::label('criterio', 'Criterio') !!}
                {!! Form::text('criterio', null, ['class' => 'form-control', 'placeholder' => 'Escribe el criterio']) !!}
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {!! Form::label('categoria_id', 'Id de la categoría') !!}
                {!! Form::select('categoria_id', $ids, null,  ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <br>
            <div class="form-group">
                {!! Form::submit('Agregar criterio', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

    @if ( $errors->any() )
        <ul class="alert alert-danger">
            @foreach ( $errors->all() as $error )
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    @endif

@stop

@section('scripts')
    <script>
        $("#li-criterios").addClass('active');
    </script>

@stop