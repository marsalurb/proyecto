@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear cliente</div>

                    <div class="panel-body">
                        @include('flash:message')

                        {!! Form::model($purchaser, ['route'=>['purchasers.update',$purchaser->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('sex', 'Sexo') !!}

                            //input

                        </div>
                        <div class="form-group">
                            {!! Form::label('birthdate', 'Fecha de cumpleaños')!!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


