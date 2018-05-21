@extends('layouts.adminlte')
@section('content')
  <div class="container">

    <h1>Crear Usuario</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Register</div>

            <div class="panel-body">
              <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('rol') ? ' has-error' : '' }}">
                  <label for="rol" class="col-md-4 control-label">Rol</label>


                  <div class="col-md-6">
                    <select class="" name="rol_id">

                    @foreach ($rols as $rol)
                      <option class="form-control" value="{{ $rol->id }}">{{ $rol->name }}</option>
                    @endforeach


                    </select>

                    @if ($errors->has('rol'))
                      <span class="help-block">
                        <strong>{{ $errors->first('rol') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                  <label for="first_name" class="col-md-4 control-label">First Name</label>

                  <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                    @if ($errors->has('first_name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>


                <div class="form-group{{ $errors->has('second_name') ? ' has-error' : '' }}">
                  <label for="second_name" class="col-md-4 control-label">Second Name</label>

                  <div class="col-md-6">
                    <input id="second_name" type="text" class="form-control" name="second_name" value="{{ old('second_name') }}" required autofocus>

                    @if ($errors->has('second_name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('second_name') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>


                <div class="form-group{{ $errors->has('first_last_name') ? ' has-error' : '' }}">
                  <label for="first_last_name" class="col-md-4 control-label">First Last Name</label>

                  <div class="col-md-6">
                    <input id="first_last_name" type="text" class="form-control" name="first_last_name" value="{{ old('first_last_name') }}" required autofocus>

                    @if ($errors->has('first_last_name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('first_last_name') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('second_last_name') ? ' has-error' : '' }}">
                  <label for="second_last_name" class="col-md-4 control-label">Second Last Name</label>

                  <div class="col-md-6">
                    <input id="second_last_name" type="text" class="form-control" name="second_last_name" value="{{ old('second_last_name') }}" required autofocus>

                    @if ($errors->has('second_last_name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('second_last_name') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                  <label for="telephone" class="col-md-4 control-label">telephone</label>

                  <div class="col-md-6">
                    <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required autofocus>

                    @if ($errors->has('telephone'))
                      <span class="help-block">
                        <strong>{{ $errors->first('telephone') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
                  <label for="cellphone" class="col-md-4 control-label">Cellphone</label>

                  <div class="col-md-6">
                    <input id="cellphone" type="text" class="form-control" name="cellphone" value="{{ old('cellphone') }}" required autofocus>

                    @if ($errors->has('cellphone'))
                      <span class="help-block">
                        <strong>{{ $errors->first('cellphone') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>


                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                  <label for="address" class="col-md-4 control-label">Address</label>

                  <div class="col-md-6">
                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                    @if ($errors->has('address'))
                      <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>


                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-4 control-label">Password</label>

                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                  <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                      Register
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
