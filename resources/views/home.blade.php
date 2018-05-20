@extends('layouts.adminlte')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <a class="btn btn-primary" href="user/create"> Crear Usuario</a>
                <a class="btn btn-success" href="user">Ver usuarios</a></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
