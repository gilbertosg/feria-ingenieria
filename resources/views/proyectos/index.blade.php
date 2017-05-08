@extends('app')

@section('estilos')
    <!-- DATA TABLES -->
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('titulo')
    <h1>Proyectos</h1>
@stop

@section('content')

    <br><br>
    <div class="row">
        <div class="col-lg-3">
            <a href="{{ url('profesores/create') }}"><button class="btn btn-lg btn-primary">Agregar proyecto</button></a>
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <i class="fa fa-briefcase"></i>&nbsp;<span>Proyectos</span>
                    <span id="mysearch" class="pull-right"><i id="icon_search" class="fa fa-search">&nbsp;</i><input id="search" type="text"> </span>
                </div>
                <div class="panel-body table-responsive">
                    <table id="tabla-proyectos" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Nombre Proyecto</th>
                            <th>Descripción</th>
                            <th>Materia</th>
                            <th>Profesor</th>
                            <th>Información Adicional</th>
				<th>Fecha</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($proyectos as $proy)
                            <tr>
                                <td>{{ $proy->proyecto }}</td>
                                <td>{{ $proy->descripcion }}</td>
                                <td>{{ $proy->materia }}</td>
                                <td>{{ $proy->profesor }}</td>
                                <td><a href="{{ url('proyectos/'.$proy->id_proyecto) }}">Más información</a></td>
					<td>{{ date('d-m-Y', strtotime($proy->created_at)) }}</td>
                                <td>
                                    {!! Form::open(array('method'=>'DELETE', 'route'=>array('proyectos.destroy', $proy->id_proyecto))) !!}
                                    {!! Form::submit('Borrar',array('class'=>'btn btn-danger btn-xs','id'=>'delete')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>


@stop

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

    <script>
        $("#li-proyectos").addClass('active');
    </script>

    <script>

        //
        var tabla = $('#tabla-proyectos').dataTable({
            "aaSorting": [],
            "bLengthChange": false,
            "iDisplayLength": 100
        });

        $('#search').keyup(function(){
            tabla.fnFilter($(this).val());
        });

    </script>
@stop
