@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar venta</div>

                    <div class="panel-body">


                        {!! Form::model($sale, ['route'=>['sales.update',$sale->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del cliente') !!}
                            {!! Form::text('dni', $sale->purchaser->user->dni, ['class'=>'form-control', 'required', 'autofocus']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del empleado') !!}
                            {!! Form::text('dni', $sale->employer->user->dni,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        </div>
                        <div class="form-group">
                            {!! Form::label('timestamps', 'Fecha')!!}
                            {!! Form::text('timestamps',$sale->timestamps,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


