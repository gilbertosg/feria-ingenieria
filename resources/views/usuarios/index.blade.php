@extends('app')

@section('estilos')
    <!-- DATA TABLES -->
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('titulo')
    <h1>Usuarios</h1>
@stop

@section('content')

    <br><br>
    <div class="row">
        <div class="col-xs-12 col-lg-8">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <i class="fa fa-users"></i>&nbsp;<span>Usuarios</span>
                    <span id="mysearch" class="pull-right"><i id="icon_search" class="fa fa-search">&nbsp;</i><input id="search" type="text"> </span>
                </div>
                <div class="panel-body table-responsive">
                    <table id="tabla-usuarios" class="table table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Privilegio</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($usuarios as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nombre }}</td>
                                <td>{{ $user->apellidos }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->privilegio }}</td>
                                <td>
                                    <a href="{{ url('usuarios/'.$user->id.'/edit')  }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                </td>
                                <td>
                                    {!! Form::open(array('method'=>'DELETE', 'route'=>array('usuarios.destroy', $user->id))) !!}
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
        $("#li-usuarios").addClass('active');
    </script>

    <script>

        //
        var tabla = $('#tabla-usuarios').dataTable({
            "aaSorting": [],
            "bLengthChange": false,
            "iDisplayLength": 100,
            "bInfo": false
        });

        $('#search').keyup(function(){
            tabla.fnFilter($(this).val());
        });

    </script>
@stop