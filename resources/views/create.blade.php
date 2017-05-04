<h3>Ajouter une nouvelle tâche</h3>

<form method="POST" name="formulaire" action="{{ route('tasks.store') }}">
    {{ csrf_field() }} <!-- Obligatoire sinon message d'erreur (token) -->
    <p>
        Tache : 
        <input type="text" name="name" value="{{ old('name') }}"/>
    </p>
    <input type="submit" value="Créer">
    {{ $errors->first('name') }}
</form>