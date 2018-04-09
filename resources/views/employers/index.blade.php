@extends('layouts.app')

<div class="container")>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear empleado</div>

                <div class="panel-body">
                    @include('flash:message')
                    {!! Form::open(['route'=>'employers.create', 'method'=>'get']) !!}
                    {!! Form::submit('Crear empleado', ['class'=> 'btn btn-primary']) !!}
                    {!! Form::close() !!}

                    <br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Rol</th>
                        </tr>

                        @foreach($employers as $employer)
                            <tr>
                                <td>{{$semployer->role}}</td>
                                <td>
                                    {!! Form::open(['route'=>['employers.edit', $item->id], 'method' => 'get']) !!}
                                    {!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['route'=>['employers.destroy', $item->id], 'method' => 'delete']) !!}
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