@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ventas</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route'=>'sales.create', 'method'=>'get']) !!}
                        {!! Form::submit('Crear venta', ['class'=> 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Venta</th>
                                <th>Cliente</th>
                                <th>Empleado</th>

                            </tr>

                            @foreach($sales as $sale)
                                <tr>
                                    <td>{{$sale->id}}</td>
                                    <td>{{$sale->purchaser->fullname}}</td>
                                    <td>{{$sale->employer->fullname}}</td>
                                    <td>
                                        {!! Form::open(['route'=>['itemSales.index', $sale->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Detalles', ['class'=> 'btn btn-success']) !!}
                                        {!! Form::close() !!}
                                    </td>

                                    <td>
                                        {!! Form::open(['route'=>['sales.edit', $sale->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>

                                    <td>
                                        {!! Form::open(['route'=>['sales.destroy', $sale->id], 'method' => 'delete']) !!}
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


