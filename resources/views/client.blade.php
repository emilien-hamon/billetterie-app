<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
</head>
<body>
    <a href="salle">Liste des salle</a>
    <a href="reservation">Reservations</a>
    <a href="http://billetterie.test">Accueil</a>
    <h2>Liste des clients :</h2>
    @foreach ($client as $clients)
    <ul>
        <li>Nom :{{$clients->nom}}</li>
        <li>Prenom :{{$clients->prenom}}</li>
        <li>Email :{{$clients->email}}</li>
    </ul>
    @endforeach
</body>
</html>
