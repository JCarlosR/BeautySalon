@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                       
                        <div class="col-xs-12">
                            <label for="request_date">Fecha: </label>
                            <input type="text" name="request_date" id="request_date" value="{{ date('d/m/Y') }}" class="form-control" readonly>
                            <div id="datepicker" data-date="{{ date('d/m/Y') }}"></div>
                        </div>
                       
                        <div class="col-xs-12">
                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">CITAS</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-hover text-center">
                                                <thead>
                                                <tr>
                                                    <th>FECHA</th>
                                                    <th>HORA</th>
                                                    <th>ESPECIALISTA</th>
                                                    <th>CLIENTE</th>
                                                    <th>CELULAR</th>
                                                    <th>DETALLE</th>
                                                    <th>ACCIÓN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $citas as $cita)
                                                    <tr>
                                                        <td>{{ $cita->fecha }}</td>
                                                        <td>{{ $cita->hora }}</td>
                                                        <td>{{ $cita->personal->nombres }} {{ $cita->personal->apellidos }} </td>
                                                        <td>{{ $cita->nombres }} {{ $cita->apellidos }}</td>
                                                        <td>{{ $cita->celular }}</td>
                                                        <td>{{ $cita->detalles }}</td>
                                                        {{--<td>--}}
                                                        {{--<a href="{{ url('/citas/listado/'.$appointment->id) }}" class="btn btn-success">--}}
                                                        {{--<i class="fa fa-pencil">Editar</i>--}}
                                                        {{--</a>--}}
                                                        {{--</td>--}}
                                                        <td>
                                                            <form action="{{ url('/sistema/administrador/'.$cita->id) }}" method="post">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit" class="btn btn-success">
                                                                    <i class="fa fa-trash">Atender</i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
