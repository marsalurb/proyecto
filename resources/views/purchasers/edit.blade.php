@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar cliente</div>

                    <div class="panel-body">


                        {!! Form::model($purchaser, ['route'=>['purchasers.update',$purchaser->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('sex', 'Sexo del cliente') !!}
                            {!! Form::text('sex',$purchaser->sex,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del cliente') !!}
                            {!! Form::text('dni',$purchaser->user->dni,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('firstname', 'Nombre del cliente') !!}
                            {!! Form::text('firstname',$purchaser->user->firstname,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Primer apellido del cliente') !!}
                            {!! Form::text('surname',$purchaser->user->surname,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname2', 'Segundo apellido del cliente') !!}
                            {!! Form::text('surname2',$purchaser->user->surname2,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('number', 'Nº telefono del cliente') !!}
                            {!! Form::text('number',$purchaser->user->number,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Direccion del cliente') !!}
                            {!! Form::text('address',$purchaser->user->address,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email del cliente') !!}
                            {!! Form::text('email',$purchaser->user->email,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('birthdate', 'Fecha de nacimiento')!!}
                            {!! Form::text('birthdate',$purchaser->birthdate,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


