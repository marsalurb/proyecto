@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear linea de venta</div>

                    <div class="panel-body">
                        @include('flash:message')

                        {!! Form::open(['route'=>'linesales.store']) !!}
                        <div class="form-group">
                            {!! Form::label('amount', 'Cantidad') !!}

                            ///input

                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


