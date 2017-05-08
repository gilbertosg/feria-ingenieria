@extends('layouts.login')

@section('content')

    <form class="form-horizontal form-login" role="form" method="POST" action="{{ route('login') }}">
        <img src="img/tec.jpg" class="img-responsive" style="margin: 0 auto;">

        {{ csrf_field() }}

        <div class="login-wrap">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Mail</label>

                <div class="col-md-8">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-8">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Login &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <br><hr>
            <div class="registration">
                Aún no tiene una cuenta?<br/>
                <a class="" href="{{ url('registrate') }}">
                    Crear una cuenta
                </a>
            </div>
        </div>


    </form>

@endsection
