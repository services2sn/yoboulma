@extends('layouts.guest.colis')

@section('title')
    Expédier un colis
@endsection

@section('colis-form')
<div class="container">
<div class="row">

  <form class="form-horizontal" method='POST'>
      {{ csrf_field() }}

    <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Expédier un colis (informations du colis)</div>
              <div class="panel-body form">


                      <div class="form-group{{ $errors->has('objet') ? ' has-error' : '' }}">
                          <label for="objet" class="col-md-4 control-label">Je veux envoyer un(e)</label>

                          <div class="col-md-6">
                              <input type="text" class="form-control" name="objet" value="{{ old('objet') }}" required autofocus>

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
                              <textarea class='form-control' name='description' value="{{ old('description')}}" required>

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
                              <input type="text" class="form-control" name="lieu_depart" required>

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
                              <input type="text" class="form-control" name="lieu_arrivee" required>

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
                              <input type="text" class="form-control" name="date_limite" required>

                              @if ($errors->has('date_limite'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('date_limite') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="format" class="col-md-4 control-label">Format</label>
                        <div class="row">
                          <div class=" form-check form-check-inline ">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="format"  value="S">
                            <label class="form-check-label" for="inlineRadio1">Taille S</label>
                          </div>

                          <div class=" form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="format"  value="M">
                            <label class="form-check-label" for="inlineRadio2">Taille M</label>
                          </div>
                          <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="format"  value="L">
                            <label class="form-check-label" for="inlineRadio3">Taille L</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class=" form-check form-check-inline ">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="format" value="XL">
                            <label class="form-check-label" for="inlineRadio4">Taille XL</label>
                          </div>
                          <div class=" form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="format" value="XXL">
                            <label class="form-check-label" for="inlineRadio5">Taille XXL</label>
                          </div>
                        </div>

                      </div>

                      <div class="form-group">
                          <label for="contact" class="col-md-4 control-label">Contact</label>

                          <div class="col-md-6">
                              <input type="text" class="form-control" name="contact" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="photo" class="col-md-4 control-label">Photo</label>

                          <div class="col-md-6">
                              <input type="file" class=" form-control-file " name="photo" required>
                          </div>

                      </div>
              </div>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Expédier un colis (pricing)</div>
              <div class="panel-body form">

                  <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                    <label for="price" class="col-md-4 control-label">Prix de la livraison</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}" required autofocus>

                        @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>

                  <div class="form-group{{ $errors->has('fees') ? ' has-error' : '' }}">
                      <label for="price_ttc" class="col-md-4 control-label"> Frais de livraison </label>

                      <div class="col-md-6">
                          <input type="text" class="form-control" name="fees" required>

                          @if ($errors->has('fees'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('fees') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('price_ttc') ? ' has-error' : '' }}">
                      <label for="price_ttc" class="col-md-4 control-label"> Prix total TTC</label>

                      <div class="col-md-6">
                          <input type="text" class="form-control" name="price_ttc" required>

                          @if ($errors->has('price_ttc'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('price_ttc') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="col-md-8 col-md-offset-9">
                  <button type="submit" class="btn btn-primary">
                      Valider l&apos;annonce...
                  </button>
              </div>
          </div>
      </form>
</div>
</div>
@endsection
