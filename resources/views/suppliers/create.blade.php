@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear proveedor</div>

                    <div class="panel-body">
                        @include('flash:message')

                        {!! Form::open(['route'=>'suppliers.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}

                            //input

                        </div>
                        <div class="form-group">
                            {!! Form::label('number', 'Numero de contacto')!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email')!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Direccion')!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('CIF', 'CIF')!!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


