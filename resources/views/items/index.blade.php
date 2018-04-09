@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear producto</div>

                    <div class="panel-body">
                        @include('flash:message')
                        {!! Form::open(['route'=>'items.create', 'method'=>'get']) !!}
                        {!! Form::submit('Crear producto', ['class'=> 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Precio</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Garantia</th>
                            </tr>

                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->model}}</td>
                                    <td>{{$item->brand}}</td>
                                    <td>{{$item->guarantee}}</td>
                                    <td>
                                        {!! Form::open(['route'=>['items.edit', $item->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['items.destroy', $item->id], 'method' => 'delete']) !!}
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


