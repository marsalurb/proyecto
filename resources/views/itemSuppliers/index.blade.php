@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Productos</div>
                    <br>


                    <div class="panel-body">
                        @include('flash::message')


                        {!! Form::open(['route' => 'itemSuppliers.create', 'method' => 'get', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Crear relación', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}


                        <br><br>

                        <table id="tabla-itemSupplier"  class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Proveedor</th>
                                <th>Modelo</th>
                                <th>Precio</th>
                                <th>Marca</th>
                                <th>Garantia</th>
                                <th>Stock</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($itemSuppliers as $itemSupplier)
                                <tr data-id="{{$itemSupplier->id}}">
                                    <td>{{ $itemSupplier->supplier->name }}</td>
                                    <td>{{ $itemSupplier->item->model }}</td>
                                    <td>{{ $itemSupplier->item->price }}</td>
                                    <td>{{ $itemSupplier->item->brand }}</td>
                                    <td>{{ $itemSupplier->item->guarantee }}</td>
                                    <td>{{ $itemSupplier->item->stock }}</td>



                                    <td>
                                        {!! Form::open(['route'=> ['itemSuppliers.edit', $itemSupplier->id],'method'=>'get']) !!}
                                        {!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' =>
                                         ['itemSuppliers.destroy',$itemSupplier->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('Borrar',
                                        ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{--}}    {!! Form::open(['route' => ['tipoencuestas.destroy',':TIPOENCUESTA_ID'], 'method' => 'delete','id'=>'form-delete']) !!}
        {!! Form::close() !!} {{--}}
@endsection