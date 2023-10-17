<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('Billeterie')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand m-1" href="{{__('http://billetterie.test/dashboard')}}"> 🎭 {{__('Accueil')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="{{__('Toggle navigation')}}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('salle.index') }}">{{__('Liste des salles')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation.index') }}">{{__('Reservations')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.index') }}">{{__('Client')}}</a>
                </li>
            </ul>
        </div>
        <div class="me-3 space-y-1">
            <div class="d-flex">
                <form action="{{ route('change.language') }}" method="post" id="languageForm" class="me-2 mt-2">
                    @csrf
                    <select name="language" id="language" class="form-select form-select-sm">
                        <option value="fr" @if (session('locale')== 'fr')selected @endif> {{__('FR')}}</option>
                        <option value="en" @if (session('locale')== 'en')selected @endif> {{__('EN')}}</option>
                    </select>
                </form>
                <div class="font-medium text-base text-primary me-4 mt-2">
                    {{__('Bonjour')}} {{ Auth::user()->name }} !
                </div>
                <x-responsive-nav-link :href="route('profile.edit')" class="btn btn-primary me-2">
                    {{ __('Profil') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}" class="me-2">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-danger">
                        {{ __('Déconnexion') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </nav>
    @yield('content')
    <script>
        document.getElementById('language').addEventListener('change', function() {
            document.getElementById('languageForm').submit();
        });
    </script>
</body>

</html>
