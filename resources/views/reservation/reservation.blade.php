<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>
</head>

<body>
    <a href="client">Liste des clients</a>
    <a href="salle">Liste des salle</a>
    <a href="http://billetterie.test">Accueil</a>
    <h2>Liste des reservations :</h2>
    @foreach ($reservation as $reservations)
        <ul>

            <h2>Numéro :{{$reservations->numero}}</h2>
            <li>Date :{{$reservations->date}}</li>
            <li>Heure :{{$reservations->heure}}</li>
            <li>Prix :{{$reservations->prix}}</li>
            <li>Nombre de place :{{$reservations->place}}</li>
        </ul>
    @endforeach
</body>

</html>
