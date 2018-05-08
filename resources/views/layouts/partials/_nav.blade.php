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
                <a class="nav-link" href="{{ route('guest.colis.formColis') }}">Expédier un colis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guest.trajet.formTrajet') }}">Proposer un trajet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guest.annonce.vueAnnonce') }}">Voir les annonces</a>
            </li>

        </ul>
    </div>

    <div class="collapse navbar-collapse" id="guest-header-menu">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
            <a class="nav-link" href="{{ route('guest.auth.register.form') }}"><span class="badge">Inscription</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('guest.auth.login.form') }}"> <span class="badge">Connexion</span></a>
            </li>
        </ul>
    </div>
</nav>
