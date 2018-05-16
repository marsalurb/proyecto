@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Clientes</div>

                    <div class="panel-body">

                        {!! Form::open(['route'=>'purchasers.create', 'method'=>'get']) !!}
                        {!! Form::submit('Crear cliente', ['class'=> 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>

                                <th>Nombre</th>
                                <th>Pirmer apellido</th>
                                <th>Segundo apellido</th>
                                <th>DNI</th>
                                <th>Sexo</th>
                                <th>Fecha de nacimiento</th>
                                <th>Direccion</th>
                                <th>Nº telefono</th>
                                <th>Email</th>


                            </tr>

                            @foreach($purchasers as $purchaser)
                                <tr>

                                    <td>{{$purchaser->user->firstname}}</td>
                                    <td>{{$purchaser->user->surname}}</td>
                                    <td>{{$purchaser->user->surname2}}</td>
                                    <td>{{$purchaser->user->dni}}</td>
                                    <td>{{$purchaser->sex}}</td>
                                    <td>{{$purchaser->birthdate}}</td>
                                    <td>{{$purchaser->user->address}}</td>
                                    <td>{{$purchaser->user->number}}</td>
                                    <td>{{$purchaser->user->email}}</td>
                                    <td>
                                        {!! Form::open(['route'=>['purchasers.edit', $purchaser->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['purchasers.destroy', $purchaser->id], 'method' => 'delete']) !!}
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


