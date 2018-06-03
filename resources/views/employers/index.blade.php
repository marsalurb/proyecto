@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Empleados</div>
                    <br>

                    <div class="panel-body">
                        @include('flash::message')
                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Rol</th>
                                <th>Nombre</th>
                                <th>Primer apellido</th>
                                <th>Segundo apellido</th>
                                <th>DNI</th>
                                <th>Direccion</th>
                                <th>Nº telefono</th>
                                <th>Email</th>

                            </tr>

                            @foreach($employers as $employer)
                                <tr>
                                    <td>{{$employer->role->name}}</td>
                                    <td>{{$employer->user->firstname}}</td>
                                    <td>{{$employer->user->surname}}</td>
                                    <td>{{$employer->user->surname2}}</td>
                                    <td>{{$employer->user->dni}}</td>
                                    <td>{{$employer->user->address}}</td>
                                    <td>{{$employer->user->number}}</td>
                                    <td>{{$employer->user->email}}</td>
                                    <td>
                                        {!! Form::open(['route'=>['employers.edit', $employer->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['employers.destroy', $employer->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('Borrar', ['class'=> 'btn btn-danger', 'onclick'=>'if(!confirm("¿Está seguro?))event.preventDefault();']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection