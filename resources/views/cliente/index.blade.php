@extends('layouts.adminlte')

@section('content')
  <div class="container">
    <h1>Clientes</h1>
    @if(Session::has('message'))
     <div class="alert alert-success alert-dismissible" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       {{Session::get('message')}}
     </div>
   @endif

   <table class='table'>
         <thead>
             <th>Nombre</th>
             <th>Descripcion</th>

         </thead>

         @foreach($clientes as $cliente)
             <tbody>
                 <td>{{$cliente->nombre}}</td>
                 <td>{{$cliente->descripcion}}</td>
             </tbody>
         @endforeach
     </table>
  </div>

@endsection
