@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar línea de venta</div>
                    <br>

                    <div class="panel-body">


                        {!! Form::model($itemSale, [ 'route' => ['itemSales.update',$itemSale->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('amount', 'Cantidad') !!}
                            {!! Form::number('amount',$itemSale->item_id,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('item_id', 'Modelo producto') !!}
                            <br>
                            {!! Form::select('item_id', $items, $itemSale->item_id, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection