@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar </div>
                    <br>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($itemSupplier, [ 'route' =>
                        ['itemSuppliers.update', $itemSupplier->id], 'method'=>'PUT']) !!}



                        <div class="form-group">
                            {!!Form::label('item_id', 'Producto') !!}
                            <br>
                            {!! Form::select('item_id', $items, $itemSupplier->item_id, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('supplier_id', 'Proveedor') !!}
                            <br>
                            {!! Form::select('supplier_id', $suppliers, $itemSupplier->supplier_id, ['class' => 'form-control']) !!}
                        </div>



                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection