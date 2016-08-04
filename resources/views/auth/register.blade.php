@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-7 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panelHeader panel-heading text-center">REGISTRO</div>
              <div class="panelBody panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                      {{ csrf_field() }}

                      <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-sm-4 col-form-label">NOMBRE</label>

                          <div class="col-sm-8">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row {{ $errors->has('surname') ? ' has-error' : '' }}">
                          <label for="surname" class="col-sm-4 col-form-label">APELLIDO</label>

                          <div class="col-sm-8">
                              <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                              @if ($errors->has('surname'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('surname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row {{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
                          <label for="phone-number" class="col-sm-4 col-form-label">NUMERO DE TELEFONO</label>

                          <div class="col-sm-8">
                              <input id="phone-number" type="text" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}">

                              @if ($errors->has('phoneNumber'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('phoneNumber') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-sm-4 col-form-label">E-MAIL</label>

                          <div class="col-sm-8">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group row {{ $errors->has('address') ? ' has-error' : '' }}">
                          <label for="address" class="col-sm-4 col-form-label">DIRECCION</label>

                          <div class="col-sm-8">
                              <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                              @if ($errors->has('address'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('address') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group row {{ $errors->has('sex') ? ' has-error' : '' }}">
                          <label for="sex" class="col-sm-4 col-form-label">SEXO</label>

                          <div class="col-sm-8">
                              <label for="male">HOMBRE</label>
                              <input type="radio" id="male" name="sex" value="m">
                              <label for="female">MUJER</label>
                              <input type="radio" id="female" name="sex" value="f">

                              @if ($errors->has('sex'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('sex') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row {{ $errors->has('date') ? ' has-error' : '' }}">
                          <label for="date" class="col-sm-4 col-form-label">FECHA DE NACIMIENTO</label>

                          <div class="col-sm-8">
                              <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}">

                              @if ($errors->has('date'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('date') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-sm-4 col-form-label">CONTRASEÑA</label>

                          <div class="col-sm-8">
                              <input id="password" type="password" class="form-control" name="password">

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                          <label for="password-confirmation" class="col-sm-4 col-form-label">CONFIRMAR CONTRASEÑA</label>

                          <div class="col-sm-8">
                              <input id="password-confirmation" type="password" class="form-control" name="password_confirmation">

                              @if ($errors->has('password_confirmation'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row ">
                          <div class="col-md-4 col-md-offset-4">
                              <button type="submit" class="registerButton btn btn-primary">
                                  <i class="fa fa-btn fa-user"></i> REGISTRARSE
                              </button>
                          </div>
                      </div>
                      <div class="clearout"></div>
                      <div class="otherRegistration text-center">
                        <p>
                          <div class="lineLeft">
                          </div>
                          o registrate con
                          <div class="lineRight">
                          </div>
                        </p>
                          <div class="clearout"></div>
                          <div class="col-md-4 col-md-offset-2">
                            <div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>
                          </div>
                          <div class="col-md-4 col-md-offset-1">
                            <div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>
                          </div>

                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
