@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Datos correctos, bienvenido.</div>

                <div class="panel-body">
                    <td>
                        Seleccione la sección que desee visualizar.

                    </td>
                    <td>
                        {!! Form::open(['route' => ['items.index'], 'method' => 'get']) !!}
                        {!!   Form::submit('Productos', ['class'=> 'btn btn-primary btn-block'])!!}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['route' => ['sales.index'], 'method' => 'get']) !!}
                        {!!   Form::submit('Ventas', ['class'=> 'btn btn-basic btn-block'])!!}
                        {!! Form::close() !!}
                    </td>

                    <td>
                        {!! Form::open(['route' => ['purchasers.index'], 'method' => 'get']) !!}
                        {!!   Form::submit('Clientes', ['class'=> 'btn btn-primary btn-block'])!!}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['route' => ['suppliers.index'], 'method' => 'get']) !!}
                        {!!   Form::submit('Proveedores', ['class'=> 'btn btn-basic btn-block'])!!}
                        {!! Form::close() !!}
                    </td>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
