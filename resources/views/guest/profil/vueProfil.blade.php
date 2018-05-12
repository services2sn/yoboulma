@extends('layouts.guest.profil')

@section('title')
    @parent
    Modifier votre profil
@endsection

@section('profil-form')
<div class="container">
<div class="row">
  <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Modifier votre profil</div>
            <div class="panel-body form">
                <form class="form-horizontal" method='POST'>
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="format" class="col-md-4 control-label">Civilité</label>
                      <div class="row">
                        <div class=" form-check form-check-inline ">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input class="form-check-input" type="radio" name="gender"  value="M">
                          <label class="form-check-label" for="inlineRadio1">M.</label>
                        </div>

                        <div class=" form-check form-check-inline ">
                          <input class="form-check-input" type="radio" name="gender"  value="Mme">
                          <label class="form-check-label" for="inlineRadio2">Mme</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label for="first_name" class="col-md-4 control-label">Prénom</label>

                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                        <label for="middle_name" class="col-md-4 control-label">Deuxième Prénom</label>

                        <div class="col-md-6">
                            <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}" required autofocus>

                            @if ($errors->has('middle_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('middle_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label for="last_name" class="col-md-4 control-label">Nom</label>

                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Adresse mail</label>

                        <div class="col-md-6">
                            <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label">Téléphone</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('date_birthday') ? ' has-error' : '' }}">
                        <label for="date_birthday" class="col-md-4 control-label">Date de naissance</label>

                        <div class="col-md-6">
                            <input id="date_birthday" type="text" class="form-control" name="date_birthday" value="{{ old('date_birthday') }}" required>

                            @if ($errors->has('date_birthday'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date_birthday') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-md-4 control-label">Adresse</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Mot de passe</label>

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
                        <label for="password-confirm" class="col-md-4 control-label">Confirmation du mot de Passe</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="photo" class="col-md-4 control-label">Photo</label>

                        <div class="col-md-6">
                            <input type="file" class=" form-control-file " name="photo" required>
                        </div>

                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Enregistrer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
