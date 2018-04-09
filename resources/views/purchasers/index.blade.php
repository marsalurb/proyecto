@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear cliente</div>

                    <div class="panel-body">
                        @include('flash:message')
                        {!! Form::open(['route'=>'purchasers.create', 'method'=>'get']) !!}
                        {!! Form::submit('Crear cliente', ['class'=> 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Sexo</th>
                                <th>Fecha de nacimiento</th>
                            </tr>

                            @foreach($purchasers as $purchaser)
                                <tr>
                                    <td>{{$purchaser->sex}}</td>
                                    <td>{{$purchaser->birthdate}}</td>
                                    <td>
                                        {!! Form::open(['route'=>['purchasers.edit', $item->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['purchasers.destroy', $item->id], 'method' => 'delete']) !!}
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


