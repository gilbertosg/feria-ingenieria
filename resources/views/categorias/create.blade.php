@extends('app')

@section('titulo')
    <h1>Categorías</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-4">
            {!! Form::open(['url' => 'categorias']) !!}

            <div class="form-group">
                {!! Form::label('categoria', 'Categoría') !!}
                {!! Form::text('categoria', null, ['class' => 'form-control', 'placeholder' => 'Escribe la categoría...']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Agregar categoría', ['class' => 'btn btn-success']) !!}
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
        $("#li-categorias").addClass('active');
    </script>
@stop