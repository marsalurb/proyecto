@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear producto</div>

                    <div class="panel-body">


                        {!! Form::model($item, ['route'=>['items.update',$item->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('price', 'Precio del producto') !!}

                            //input

                        </div>
                        <div class="form-group">
                            {!! Form::label('model', 'Modelo del producto')!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('brand', 'Marca del producto')!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('guarantee', 'Garantia del producto')!!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


