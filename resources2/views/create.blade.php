@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un visiteur</h2>
        <form method="POST" action="{{ route('visiteur.store') }}">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <!-- Ajoutez d'autres champs au besoin -->

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
