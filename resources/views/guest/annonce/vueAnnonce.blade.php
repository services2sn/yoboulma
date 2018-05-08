@extends('layouts.guest.annonces')

@section('title')
    Voir les annonces
@endsection

@section('vue-annonces')
  @foreach($data_annonce as $annonce)
    <div class="card bg-light col-md-6 col-md-offset-4">

      <div class="card-body">
        <figure class="pull-left">
          <img class="media-object img-rounded img-responsive"  src="http://placehold.it/150x120" alt="placehold.it/150x120" >
        </figure>
        <div class="col-md-offset-4">
          <p class="badge badge-primary" style='float:right'>{{ $annonce -> proposal_price}}</p>
          <h4 class="card-title"> {{ $annonce->lieu_depart}} - {{ $annonce->lieu_arrivee}} </h4>
          <h5 class="card-title"> {{ $annonce->date_depart}} - {{ $annonce->date_arrivee}}</h5>
          <p class="card-text">{{ $annonce->etapes}}</p>
          <a class="card-link" href="#" ><button class="btn-primary" style='float:right'> selectionner </button></a>
          <p class="card-text"> Capacité : {{ $annonce->accepted_format}}</p>
      </div>
      </div>
    </div>
    <br />
  @endforeach
@endsection
