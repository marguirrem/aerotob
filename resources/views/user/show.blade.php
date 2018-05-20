@extends('layouts.adminlte')
@section('content')
  <div class="container">
    <h2>{{ $user->first_name }} {{ $user->first_last_name }}</h2>
  </div>
@endsection
