<!-- listVisiteurs.blade.php -->

@extends('sommaire')

@section('contenu1')


<h1>Liste des visiteurs</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <!-- ... autres colonnes selon votre table visiteur ... -->
            </tr>
        </thead>
        <tbody>
            @foreach ($visiteurs as $visiteur)
                <tr>
                    <td>{{ $visiteur['id'] }}</td>
                    <td>{{ $visiteur['nom'] }}</td>
                    <td>{{ $visiteur['prenom'] }}</td>
                    <!-- ... autres colonnes selon votre table visiteur ... -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection