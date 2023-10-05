<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mise à jour - Client</title>
</head>

<body>
    <h2>Mise à jour - Client</h2>
    <form action="{{ route('client.update', ['client' => $client->id]) }}" method="post">

        @csrf
        @method('put')

        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required maxlength="75"
                value="{{ old('nom', $client->nom) }}">
        </div>

        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required maxlength="75"
                value="{{ old('prenom', $client->prenom) }}">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required
                value="{{ old('email', $client->date_entree) }}">
        </div>


        </div>

        <div>
            <input type="submit" value="Valider" class="btn btn-success">
        </div>

    </form>
</body>

</html>
