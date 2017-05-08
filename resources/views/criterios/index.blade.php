@extends('app')

@section('titulo')
    <h1>Criterios</h1>
@stop

@section('content')

    <br><br>
    <div class="row">
        <div class="col-lg-3">
            <a href="{{ url('criterios/create') }}"><button class="btn btn-lg btn-primary">Agregar criterio</button></a>
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <i class="fa fa-tags"></i>&nbsp;<span>Criterios</span>
                </div>
                <div class="panel-body table-responsive no-padding">
                    <table class="table table-hover">

                        <tr>
                            <th>Criterio de evaluación</th>
                            <th>Id de la categoría</th>
                            <th></th>
                        </tr>

                        @foreach($criterios as $crit)
                            <tr>
                                <td>{{ $crit->criterio }}</td>
                                <td>{{ $crit->categoria_id }}</td>
                                <td>
                                    {!! Form::open(array('method'=>'DELETE', 'route'=>array('criterios.destroy', $crit->id_criterio))) !!}
                                    {!! Form::submit('Delete',array('class'=>'btn btn-danger btn-xs','id'=>'delete')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>


@stop

@section('scripts')
    <script>
        $("#li-criterios").addClass('active');
    </script>
@stop