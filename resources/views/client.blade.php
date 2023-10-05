<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
</head>
<body>
    <h2>Liste des clients :</h2>
    @foreach ($client as $clients)
    <ul>
        <li>Nom de la salle :{{$clients->nom}}</li>
        <li>Adresse :{{$clients->prenom}}</li>
        <li>Nombre de place :{{$clients->email}}</li>
    </ul>
    @endforeach
</body>
</html>
