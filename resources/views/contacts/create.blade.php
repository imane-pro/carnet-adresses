<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un Contact</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"> <!-- Lien vers le fichier CSS -->
</head>
<body>

    <div class="container">
        <h1>Ajouter un contact</h1>
        <form method="POST" action="{{ route('contacts.store') }}">
            @csrf
            <label>Nom</label>
            <input type="text" name="nom" required>
            
            <label>Téléphone</label>
            <input type="text" name="telephone" required>
            
            <label>Email</label>
            <input type="text" name="email" required>
            
            <button type="submit">Ajouter</button>
        </form>
    </div>
    
</body>
</html>
