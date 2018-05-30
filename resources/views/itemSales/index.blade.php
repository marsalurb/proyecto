@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Líneas de venta</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'itemSales.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear línea de venta', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>ID venta</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Cliente</th>
                                <th>Empleado</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                           @foreach ($itemSales as $itemSale)

                                <tr>
                                    <td>{{ $itemSale->sale_id}}</td>
                                    <td>{{ $itemSale->item->model }}</td>
                                    <td>{{ $itemSale->amount }}</td>
                                    <td>{{ $itemSale->sale->purchaser->fullname }}</td>
                                    <td>{{ $itemSale->sale->employer->fullname }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['itemSales.edit',$itemSale->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['itemSales.destroy',$itemSale->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
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

