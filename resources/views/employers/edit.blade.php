@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear empleado</div>

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
                            {!! Form::label('role', 'Rol') !!}
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


