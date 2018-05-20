@extends('layouts.adminlte')

@section('content')
  <div class="container">
    <h1>Usuarios</h1>
    @if(Session::has('message'))
     <div class="alert alert-success alert-dismissible" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       {{Session::get('message')}}
     </div>
   @endif

   <table class='table'>
         <thead>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Telefono Celular</th>

         </thead>

         @foreach($users as $user)
             <tbody>
                 <td>{{$user->first_name}}</td>
                 <td>{{$user->first_last_name }}</td>
                 <td>{{$user->cellphone }}</td>
             </tbody>
         @endforeach
     </table>
  </div>

@endsection
