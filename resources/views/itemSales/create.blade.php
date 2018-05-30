@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear línea de venta</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'itemSales.store']) !!}
                        <div class="form-group">
                            {!! Form::label('amount', 'Cantidad') !!}
                            {!! Form::number('amount',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('item_id', 'Modelo del producto') !!}
                            <br>
                            {!! Form::select('item_id', $items, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('sale_id', 'ID de la venta') !!}
                            <br>
                            {!! Form::text('sale_id', null, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection