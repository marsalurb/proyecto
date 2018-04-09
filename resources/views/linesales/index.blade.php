@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear linea de venta</div>

                    <div class="panel-body">
                        @include('flash:message')
                        {!! Form::open(['route'=>'linesales.create', 'method'=>'get']) !!}
                        {!! Form::submit('Crear linea de venta', ['class'=> 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Cantidad</th>
                            </tr>

                            @foreach($linesales as $linesale)
                                <tr>
                                    <td>{{$linesale->amount}}</td>
                                    <td>
                                        {!! Form::open(['route'=>['linesales.edit', $linesale->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['linesales.destroy', $linesale->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('Borrar', ['class'=> 'btn btn-warning', 'onclick'=>'if(!confirm("¿Está seguro?))event.preventDefault();']) !!}
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


