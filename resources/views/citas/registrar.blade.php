@extends('layouts.app')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <center><h3 class="box-title">CITA</h3></center>
        </div>
        <!-- /.box-header -->
        <!-- contenido -->
        <div class="box-body">

            <form action="{{ url('/citas/registrar') }}" method="POST">
                {{ csrf_field() }}

                <div class="col-md-12">

                    <div class="panel panel-info">
                        <div class="panel-heading text-center">Ingresa los datos correctamente para tener una cita en BEAUTY SALON</div>
                        <div class="panel-body">

                            <div class="row">
                                <row class="col-md-12">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="nombres">Nombres:</label>
                                            <input type="text" name="nombres" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="apellidos">Apellidos:</label>
                                            <input type="text" name="apellidos" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="celular">Celular:</label>
                                            <input type="text" name="celular" class="form-control">
                                        </div>
                                    </div>
                                </row>

                                <div class="form-group col-md-offset-4 col-sm-4">
                                    <label for="personal_id" class="form-control-label">Estilista:</label>
                                    <select name="personal_id" id="medico" class="form-control" >
                                        {{--Para cada uno de los elementos de la colección--}}
                                        @foreach($personales as $personal)
                                            <option value="{{ $personal->id }}"> {{ $personal->nombres }} {{ $personal->apellidos }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row col-md-12">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="fecha">Fecha:</label>
                                            <input type="date" name="fecha" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="hora">Hora:</label>
                                            <div class="input-group clockpicker">
                                                <input type="time" name="hora" class="form-control" value="09:30">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="detalles">Detalles De Atención:</label>
                                    <textarea placeholder="¿Qué podemos hacer por Tí?" name="detalles" class="form-control" rows="5" id="comment"></textarea>
                                </div>
                                <div class="text-center col-md-12">
                                    <button class="btn btn-primary">Registrar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>

            <!-- /.row -->
        </div>
        <!-- /.box-body -->

    </div>
@endsection('content')