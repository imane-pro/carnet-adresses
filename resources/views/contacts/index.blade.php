<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
</head>
<body>

    <div class="container">
        <h1>Liste des contacts</h1>
        <a href="{{ route('contacts.create') }}" class="add-contact">Ajouter un contact</a>
        
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->nom }}</td>
                        <td>{{ $contact->telephone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>
                            <a href="{{ route('contacts.edit', $contact->id) }}">Modifier</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>
