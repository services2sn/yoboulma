<nav class="navbar navbar-expand-sm box-shadow-4 bg-white">
    {{-- Logo --}}
<a class="navbar-brand" href="{{ route('guest.home') }}" id="ikaso-logo">
        <strong class="company">2SN.</strong><span class="project">yoboulma</span>
    </a>
    {{-- Guest Header Menu --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#guest-header-menu" aria-controls="guest-header-menu"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-justify"></i>
    </button>

    <div class="collapse navbar-collapse" id="guest-header-menu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guest.colis.formColis', ['connection' => 'TRUE', 'username' => $username] ) }}">Expédier un colis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guest.trajet.formTrajet', ['connection' => 'TRUE', 'username' => $username]) }}">Proposer un trajet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guest.annonce.vueAnnonce',['connection' => 'TRUE', 'username' => $username]) }}">Voir les annonces</a>
            </li>

        </ul>
    </div>

<div class="collapse navbar-collapse" id="guest-header-menu">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
            <a class="nav-link" href="#"></a>
            </li>
        </ul>
    </div>

<div class="dropdown navbar-nav ml-auto">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="glyphicon glyphicon-user"></span> {{ $username }}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{ route('guest.home') }}"> <span class="glyphicon glyphicon-log-out"> Déconnexion</span></a>
    <a class="dropdown-item" href="{{ route('guest.parametre.vueParametre',['connection' => 'TRUE', 'username' => $username]) }}"> <span class="glyphicon glyphicon-cog"> Paramètres</span></a>
    <a class="dropdown-item" href="{{ route('guest.profil.vueProfil',['connection' => 'TRUE', 'username' => $username]) }}"> <span class="glyphicon glyphicon-user"> Profil</span></a>
  </div>
</div>

</nav>
