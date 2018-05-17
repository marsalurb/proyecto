@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear venta</div>

                    <div class="panel-body">


                        {!! Form::open(['route'=>'sales.store']) !!}
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del cliente') !!}
                            {!! Form::select('dni',$purchasers,['class'=>'form-control', 'required', 'autofocus']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del empleado')!!}
                            {!! Form::select('dni',$employers,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('timestamps', 'Fecha')!!}
                            {!! Form::text('timestamps',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


