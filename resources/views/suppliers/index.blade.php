@extends('layouts.app')

<div class="container")>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear proveedor</div>

                <div class="panel-body">
                    @include('flash:message')
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
                                <td>{{$supplier->CIF}}</td>
                                <td>
                                    {!! Form::open(['route'=>['suppliers.edit', $item->id], 'method' => 'get']) !!}
                                    {!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['route'=>['suppliers.destroy', $item->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Borrar', ['class'=> 'btn btn-warning', 'onclick'=>'if(!confirm("¿Está seguro?))event.preventDefault();']) !!}
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


