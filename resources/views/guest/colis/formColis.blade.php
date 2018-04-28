@extends('layouts.guest.colis')

@section('title')
    @parent
    Expédier un colis
@endsection

@section('colis-form')
<div class="container">
<div class="row">
  <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Inscription</div>
            <div class="panel-body form">
                <form class="form-horizontal" method='POST'>
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('objet') ? ' has-error' : '' }}">
                        <label for="objet" class="col-md-4 control-label">Je veux envoyer un(e)</label>

                        <div class="col-md-6">
                            <input id="objet" type="text" class="form-control" name="objet" value="{{ old('objet') }}" required autofocus>

                            @if ($errors->has('objet'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('objet') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="col-md-4 control-label">Description</label>

                        <div class="col-md-6">
                            <textarea id='description' class='form-control' name='description' value="{{ old('description')}}" required>

                            </textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('lieu_depart') ? ' has-error' : '' }}">
                        <label for="lieu_depart" class="col-md-4 control-label"> * De</label>

                        <div class="col-md-6">
                            <input id="lieu_depart" type="lieu_depart" class="form-control" name="lieu_depart" required>

                            @if ($errors->has('lieu_depart'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lieu_depart') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('lieu_arrivee') ? ' has-error' : '' }}">
                        <label for="lieu_arrivee" class="col-md-4 control-label"> * &Agrave;</label>

                        <div class="col-md-6">
                            <input id="lieu_arrivee" type="lieu_arrivee" class="form-control" name="lieu_arrivee" required>

                            @if ($errors->has('lieu_arrivee'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lieu_arrivee') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('date_limite') ? ' has-error' : '' }}">
                        <label for="date_limite" class="col-md-4 control-label"> * &Agrave; livrer de préférence avant le </label>

                        <div class="col-md-6">
                            <input id="date_limite" type="date_limite" class="form-control" name="date_limite" required>

                            @if ($errors->has('date_limite'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date_limite') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="format" class="col-md-4 control-label">Format</label>


                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="format"  value="option1">
                        <label class="form-check-label" for="inlineRadio1">Taille S</label>
                      </div>

                      <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="format"  value="option2">
                        <label class="form-check-label" for="inlineRadio2">Taille M</label>
                      </div>
                      <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="format"  value="option3">
                        <label class="form-check-label" for="inlineRadio3">Taille L</label>
                      </div>
                      <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="format" value="option4">
                        <label class="form-check-label" for="inlineRadio4">Taille XL</label>
                      </div>
                      <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="format" value="option5">
                        <label class="form-check-label" for="inlineRadio5">Taille XXL</label>
                      </div>

                    </div>

                    <div class="form-group">
                        <label for="contact" class="col-md-4 control-label">Contact</label>

                        <div class="col-md-6">
                            <input id="contact" type="text" class="form-control" name="contact" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="photo" class="col-md-4 control-label">Photo</label>

                        <div class="col-md-6">
                            <input id="photo" type="file" class="formInputFile-input form-control" name="photo" required>
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
