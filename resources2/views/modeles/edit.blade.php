@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier le visiteur</h2>
        <form method="POST" action="{{ route('visiteur.update', $visiteur->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $visiteur->nom }}" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $visiteur->prenom }}" required>
            </div>
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" class="form-control" id="login" name="login" value="{{ $visiteur->login }}" required>
            </div>
            <!-- Ajoutez d'autres champs au besoin -->

            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
