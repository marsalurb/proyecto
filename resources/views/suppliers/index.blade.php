@extends('layouts.app')

@section('content')
<div class="container")>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Proveedores</div>
                <br>

                <div class="panel-body">
                    @include('flash::message')
                    {!! Form::open(['route'=>'suppliers.create', 'method'=>'get']) !!}
                    {!! Form::submit('Crear proveedor', ['class'=> 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                    <br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Numero</th>
                            <th>CIF</th>
                        </tr>

                        @foreach($suppliers as $supplier)
                            <tr>
                                <td>{{$supplier->name}}</td>
                                <td>{{$supplier->email}}</td>
                                <td>{{$supplier->address}}</td>
                                <td>{{$supplier->number}}</td>
                                <td>{{$supplier->cif}}</td>
                                <td>
                                    {!! Form::open(['route'=>['suppliers.edit', $supplier->id], 'method' => 'get']) !!}
                                    {!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['route'=>['suppliers.destroy', $supplier->id], 'method' => 'delete']) !!}
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


