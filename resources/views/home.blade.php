@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Datos correctos</div>


                <br class="panel-body">
                    <td>
                        Bienvenido a Óptica Salas

                    </td>
                    <br></br>

                    <td>
                        {!! Form::open(['route' => ['sales.index'], 'method' => 'get']) !!}
                        {!!   Form::submit('Ver ventas', ['class'=> 'btn btn-primary btn-block'])!!}
                        {!! Form::close() !!}
                    </td>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
