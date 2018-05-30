@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear cliente</div>

                    <div class="panel-body">

                        @include('flash::message')
                        {!! Form::open(['route'=>'purchasers.store']) !!}
                        <div class="form-group">
                            {!! Form::label('firstname', 'Nombre') !!}
                            {!! Form::text('firstname',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Pimer apellido') !!}
                            {!! Form::text('surname',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname2', 'Segundo apellido') !!}
                            {!! Form::text('surname2',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI') !!}
                            {!! Form::text('dni',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('sex', 'Sexo') !!}
                            {!! Form::text('sex',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('birthdate', 'Fecha de nacimiento')!!}
                            {!! Form::text('birthdate',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Dirección')!!}
                            {!! Form::text('address',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('number', 'Telefono') !!}
                            {!! Form::text('number',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email')!!}
                            {!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


