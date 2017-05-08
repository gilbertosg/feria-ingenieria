@extends('app')

@section('titulo')
    <h1>Categorías</h1>
@stop

@section('content')

    <br><br>
    <div class="row">
        <div class="col-lg-3">
            <a href="{{ url('categorias/create') }}"><button class="btn btn-lg btn-primary">Agregar categoría</button></a>
        </div>
    </div>


    <br><br>
    <div class="row">
        <div class="col-xs-4">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <i class="fa fa-bookmark"></i>&nbsp;<span>Categorías</span>
                </div>
                <div class="panel-body table-responsive no-padding">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Categoría</th>
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach($categorias as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->categoria }}</td>
                                <td>
                                    <a href="{{ url('categorias/'.$cat->id.'/edit')  }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                </td>
                                <td>
                                    {!! Form::open(array('method'=>'DELETE', 'route'=>array('categorias.destroy', $cat->id_categoria))) !!}
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
        $("#li-categorias").addClass('active');
    </script>
@stop