<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widli=device-widli, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billetterie</title>
</head>
<body>
    <h2>Liste des salles :</h2>
    @foreach ($salle as $salles)
    <ul>
        <li>Nom de la salle :{{$salles->nom}}</li>
        <li>Adresse :{{$salles->adresse}}</li>
        <li>Nombre de place :{{$salles->place}}</li>
    </ul>
    @endforeach

</body>
</html>
