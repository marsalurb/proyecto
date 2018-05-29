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
                            {!! Form::label('purchaser_id', 'Cliente') !!}
                            <br>
                            {!! Form::select('purchaser_id', $purchasers, $sale->purchaser_id, ['class'=>'form-control', 'required']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('employer_id', 'Empleado') !!}
                            <br>
                            {!! Form::select('employer_id', $employers, $sale->employer_id,['class'=>'form-control', 'required']) !!}
                        </div>

                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


