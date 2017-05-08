@extends('app')

@section('estilos')
        <!-- DATA TABLES -->

<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@stop

@section('titulo')
    <h1>Premiaciones</h1>
@stop

@section('content')

    <br><br>
    <div class="row">
        <div class="col-xs-12 col-lg-12">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;<span>Premiaciones</span>

                </div>
                <div class="panel-body table-responsive">
                    <table id="example" class="display nowrap" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id del proyecto</th>
                            <th>Proyecto</th>
                            <th>Calificación</th>
                            <th>Planteamiento</th>
                            <th>Ejecución</th>
                            <th>Presentación</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($calificaciones as $calif)
                            <tr>
                                <td>{{ $calif->proyecto_id }}</td>
                                <td>{{ str_limit($calif->proyecto->proyecto, $limit=64, $end="...") }}</td>
                                <td>{{ round($calif->calificacion, 2) }}</td>
                                <td>{{ $calif->planteamiento }}</td>
                                <td>{{ $calif->ejecucion }}</td>
                                <td>{{ $calif->presentacion }}</td>
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
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js" type="text/javascript"></script>

    <script>
        $("#li-premiaciones").addClass('active');
    </script>

    <script>

        /*var tabla = $('#tabla-premiaciones').dataTable({
            "aaSorting": [],
            "bLengthChange": false,
            "iDisplayLength": 100,
            "dom": 'Bfrtip',
            "buttons": [
                'csv', 'excel', 'print'
            ]
        });

        $('#search').keyup(function(){
            tabla.fnFilter($(this).val());
        });*/

        $(document).ready(function() {
            $('#example').DataTable( {
                iDisplayLength: 100,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel','print'
                ]
            } );
        } );
    </script>
@stop