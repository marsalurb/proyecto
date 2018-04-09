@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear empleado</div>

                    <div class="panel-body">
                        @include('flash:message')

                        {!! Form::open(['route'=>'employers.store']) !!}
                        <div class="form-group">
                            {!! Form::label('role', 'Rol') !!}

                            //input

                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


