@extends('layouts.login')

@section('content')

    <form class="form-horizontal form-login" role="form" method="POST" action="{{ route('registrar') }}">
        {{ csrf_field() }}

        <br>
        <h4> &nbsp;&nbsp;&nbsp; Registro:</h4>

        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Nombre</label>

            <div class="col-md-8">
                <input id="name" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                @if ($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Apellidos</label>

            <div class="col-md-8">
                <input id="name" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                @if ($errors->has('apellidos'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellidos') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Mail</label>

            <div class="col-md-8">
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
                    Registrar <i class="fa fa-check"></i>
                </button>
                <br>
                <a href="{{ url('auth/login') }}">Regresar</a>
            </div>
        </div>
    </form>
@endsection
