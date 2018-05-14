@extends('layouts.guest.trajet')

@section('title')
    Proposer un trajet
@endsection

@section('trajet-form')
<div class="container">
<div class="row">

  <form class="form-horizontal" method='POST'>
      {{ csrf_field() }}

    <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Proposer un trajet (informations du trajet)</div>
              <div class="panel-body form">


                      <div class="form-group{{ $errors->has('etapes') ? ' has-error' : '' }}">
                          <label for="etapes" class="col-md-4 control-label">Description</label>

                          <div class="col-md-6">
                              <textarea class='form-control' name='etapes' value="{{ old('etapes')}}" required>

                              </textarea>
                              @if ($errors->has('etapes'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('etapes') }}</strong>
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

                      <div class="form-group{{ $errors->has('date_depart') ? ' has-error' : '' }}">
                          <label for="date_depart" class="col-md-4 control-label"> Date aller</label>

                          <div class="col-md-6">
                              <input type="text" class="form-control" name="date_depart" required>

                              @if ($errors->has('date_depart'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('date_depart') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('date_arrivee') ? ' has-error' : '' }}">
                          <label for="date_arrivee" class="col-md-4 control-label"> Date retour</label>

                          <div class="col-md-6">
                              <input type="text" class="form-control" name="date_arrivee" required>

                              @if ($errors->has('date_arrivee'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('date_arrivee') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('detour_max') ? ' has-error' : '' }}">
                          <label for="detour_max" class="col-md-4 control-label"> Détour maximum </label>

                          <div class="col-md-6">
                              <input type="text" class="form-control" name="detour_max" required>

                              @if ($errors->has('detour_max'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('detour_max') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('frequence') ? ' has-error' : '' }}">
                          <label for="frequence" class="col-md-4 control-label"> Fréquence </label>

                          <div class="col-md-6">
                              <input type="text" class="form-control" name="frequence" required>

                              @if ($errors->has('frequence'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('frequence') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="transport" class="col-md-4 control-label"> Moyen de transport </label>
                        <div class="row">
                          <div class=" form-check form-check-inline ">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="transport"  value="1">
                            <label class="form-check-label" for="inlineRadio1"> &Agrave; pieds </label>
                          </div>

                          <div class=" form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="transport"  value="2">
                            <label class="form-check-label" for="inlineRadio2"> En deux roues </label>
                          </div>
                          <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="transport"  value="3">
                            <label class="form-check-label" for="inlineRadio3">En voiture</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class=" form-check form-check-inline ">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="transport" value="4">
                            <label class="form-check-label" for="inlineRadio4"> En camion</label>
                          </div>

                          <div class=" form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="transport" value="6">
                            <label class="form-check-label" for="inlineRadio5"> En transport en commun </label>
                          </div>
                        </div>

                      </div>

                      <div class="form-group">
                        <label for="format" class="col-md-4 control-label">Format accepté</label>
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
              </div>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Proposer un trajet (pricing)</div>
              <div class="panel-body form">

                  <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                    <label for="price" class="col-md-4 control-label">Prix proposé</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}" required >

                        @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
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
                      Valider...
                  </button>
              </div>
          </div>
      </form>
</div>
</div>
@endsection
