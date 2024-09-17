<h1>Liste des contacts</h1>
<ul>
@foreach ($contacts as $contact)
    <li>{{ $contact->nom }} - {{ $contact->telephone }} - {{ $contact->email }}</li>
@endforeach
</ul>
<a href="{{ route('contacts.create') }}">Ajouter un contact</a>
