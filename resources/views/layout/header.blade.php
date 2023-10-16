<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand m-1" href="http://billetterie.test"> 🎭 Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('salle.index') }}">Liste des salles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation.index') }}">Reservations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.index') }}">Client</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>
