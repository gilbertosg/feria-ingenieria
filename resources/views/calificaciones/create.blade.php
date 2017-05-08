@extends('evaluadores')

@section('titulo')
    <h1>Evaluadores</h1>
@stop

@section('content')

    {!! Form::open(['url' => 'evaluaciones', 'method' => 'POST']) !!}

    <br><br>
    <div class="row">
        <div class="col-lg-10">
            <div class="form-group">
                {!! Form::label('proyecto_id', 'Proyectos') !!}
                {!! Form::select('proyecto_id', $ids_proyectos, null,  ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <br>

    <input type="hidden" name="categoria_id" value="2">

    <input type="hidden" name="calificacion" id="calificacion">
    <input type="hidden" name="planteamiento" id="planteamiento">
    <input type="hidden" name="ejecucion" id="ejecucion">
    <input type="hidden" name="presentacion" id="presentacion">

    <div class="row">
        <div class="col-lg-12">
            Evalúa el proyecto en donde la calificación está en escala de 1 a 4:<br>
            &nbsp;&nbsp;1 - No cumple con ninguna característica<br>
            &nbsp;&nbsp;2 - Cumple con UNA característica<br>
            &nbsp;&nbsp;3 - Cumple con DOS características<br>
            &nbsp;&nbsp;4 - Cumple con las TRES características
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Planteamiento (Características: La idea resuelve una necesidad, Objetivos medibles, Investigación profunda)&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                <label class="radio-inline"><input type="radio" value="1" name="crit1">1</label>
                <label class="radio-inline"><input type="radio" value="2" name="crit1">2</label>
                <label class="radio-inline"><input type="radio" value="3" name="crit1">3</label>
                <label class="radio-inline"><input type="radio" value="4" name="crit1" checked="">4</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Ejecución (Características: Se integra conocimiento haciendo un desarrollo integral del proyecto, Se cumplen los objetivos, Está documentado)  &nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                <label class="radio-inline"><input type="radio" value="1" name="crit2">1</label>
                <label class="radio-inline"><input type="radio" value="2" name="crit2">2</label>
                <label class="radio-inline"><input type="radio" value="3" name="crit2">3</label>
                <label class="radio-inline"><input type="radio" value="4" name="crit2" checked="">4</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Presentación (Características: Exposición motivante, Conocimiento del tema, Respuesta correcta a preguntas) &nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                <label class="radio-inline"><input type="radio" value="1" name="crit3">1</label>
                <label class="radio-inline"><input type="radio" value="2" name="crit3">2</label>
                <label class="radio-inline"><input type="radio" value="3" name="crit3">3</label>
                <label class="radio-inline"><input type="radio" value="4" name="crit3" checked="">4</label>
            </div>
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <button type="button" class="btn btn-success" onclick="registrar()" data-toggle="modal" data-target=".bs-example-modal-sm">Registrar Calificación</button>
            </div>
        </div>
    </div>

    <!-- Small modal
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>-->

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Registro</h4>
                </div>
                <div class="modal-body">
                    <p>¿Está seguro(a) que los datos sean correctos?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <!--<button type="button" class="btn btn-primary">Registrar</button>-->
                    {!! Form::submit('Aceptar', ['class' => 'btn btn-success']) !!}
                </div>
            </div>
        </div>
    </div>

    <!--<div class="row">
        <div class="col-lg-6">
            <br>
            <div class="form-group">
                {!! Form::submit('Aceptar', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>-->

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
        $("#li-evaluaciones").addClass('active');
    </script>

    <script>
        function registrar(){
            console.log("Hola Mondo");
            var crit1 = $("input:radio[name='crit1']:checked").val();
            var crit2 = $("input:radio[name='crit2']:checked").val();
            var crit3 = $("input:radio[name='crit3']:checked").val();
            var prom = parseInt(crit1) + parseInt(crit2) + parseInt(crit3);
            var total = prom / 3;

            console.log(total);

            $("#calificacion").val(total);
            $("#planteamiento").val(crit1);
            $("#ejecucion").val(crit2);
            $("#presentacion").val(crit3);

        }
    </script>


@stop