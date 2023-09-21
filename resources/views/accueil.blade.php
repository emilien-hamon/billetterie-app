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
    @forelse ($salles as $salle)
    <ul>
        <li>Nom de la salle :{{$data->nom}}</li>
        <li>Adresse :{{$data->adresse}}</li>
        <li>Nombre de place :{{$data->place}}</li>
    </ul>
    @endforelse

</body>
</html>
