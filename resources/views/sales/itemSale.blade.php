@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Productos pertenecientes a la venta</div>

                    <div class="panel-body">

                        {{ Form::open(['url'=>'/productosVentas/'.$sale->id])}}

                        <div class="form-group">
                            {!!Form::label('item_id', 'Añadir producto') !!}
                            <br>
                            {!! Form::select('item_id', $items, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('amount', 'Cantidad') !!}
                            {!! Form::text('amount',null, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Añadir producto',['class'=>'btn-primary btn']) !!}
                        {{ Form::close() }}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                            </tr>

                            @if(isset($sale->items))

                                @foreach ($sale->items as $item)

                                       <tr>
                                           <td>{{ $item->model }}</td>
                                           <td>{{ $item->pivot->amount }}</td>

                                           <td>
                                               {{ Form::open(array('action'=> array('SaleController@deleteItem', $item->id, $sale->id)))}}
                                               {!! Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                               {!! Form::close() !!}


                                           </td>
                                       </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection