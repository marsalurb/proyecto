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
                            {!! Form::label('purchaser_id', 'Cliente') !!}
                            {!! Form::select('purchaser_id',$purchasers,['class'=>'form-control', 'required', 'autofocus']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('employer_id', 'Empleado')!!}
                            {!! Form::select('employer_id',$employers,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


