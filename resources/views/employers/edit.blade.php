@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar empleado</div>
                    <br>

                    <div class="panel-body">

                        {!! Form::model($employer, ['route'=>['employers.update',$employer->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del empleado') !!}
                            {!! Form::text('dni',$employer->user->dni,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('firstname', 'Nombre del empleado') !!}
                            {!! Form::text('firstname',$employer->user->firstname,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Primer apellido del empleado') !!}
                            {!! Form::text('surname',$employer->user->surname,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname2', 'Segundo apellido del empleado') !!}
                            {!! Form::text('surname2',$employer->user->surname2,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('number', 'Nº telefono del empleado') !!}
                            {!! Form::text('number',$employer->user->number,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Direccion del empleado') !!}
                            {!! Form::text('address',$employer->user->address,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email del empleado') !!}
                            {!! Form::text('email',$employer->user->email,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('salary', 'Salario del empleado') !!}
                            {!! Form::text('salary',$employer->salary,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('role_id', 'Rol') !!}
                            <br>
                            {!! Form::select('role_id', $roles, $employer->role_id, ['class' => 'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


