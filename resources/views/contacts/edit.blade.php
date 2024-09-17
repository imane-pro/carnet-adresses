<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un contact</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <div class="container">
        <h1>Modifier un contact</h1>
        <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
            @csrf
            @method('PUT')
            <label>Nom</label>
            <input type="text" name="nom" value="{{ $contact->nom }}">
            <label>Téléphone</label>
            <input type="text" name="telephone" value="{{ $contact->telephone }}">
            <label>Email</label>
            <input type="text" name="email" value="{{ $contact->email }}">
            <button type="submit">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
