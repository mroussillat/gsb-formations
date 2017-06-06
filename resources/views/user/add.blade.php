@extends('layouts.app')

@section('title', 'Utilisateurs')

@section('content')
<div class="col-lg-3">
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>Utilisateurs</h3>
            <h5>Liste de tous les utilisateurs</h5>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <form method="post" action="{{ url('user/add') }}">
        <div class="form-group col-lg-6">
            <label for="prenom">Prénom :</label>
            <input type="text" name="firstname" class="form-control" id="prenom" value="{{ old('firstname') }}" required/>
        </div>
        <div class="form-group col-lg-6">
            <label for="nom">Nom :</label>
            <input type="text" name="surname" class="form-control" id="nom" value="{{ old('surname') }}" required/>
        </div>
        <div class="form-group col-lg-6">
            <label for="login">Identifiant :</label>
            <input type="text" name="login" class="form-control" id="login" value="{{ old('login') }}" required/>
        </div>

        <div class="form-group col-lg-6">
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="password" class="form-control" id="mdp" value="{{ old('password') }}" required/>
        </div>

        <div class="form-group col-lg-3">
            <label for="cp">Code postal :</label>
            <input type="number" name="postal_code" class="form-control" id="cp" value="{{ old('postal_code') }}" required/>
        </div>

        <div class="form-group col-lg-9">
            <label for="ville">Ville :</label>
            <input type="text" name="city" class="form-control" id="ville" value="{{ old('city') }}" required/>
        </div>

        <div class="form-group col-lg-12">
            <label for="adresse">Adresse :</label>
            <input type="text" name="adress" class="form-control" id="adresse" value="{{ old('adress') }}" required/>
        </div>

        <div class="form-group col-lg-5">
            <label for="dateEmbauche">Date d'embauche :</label>
            <input type="date" name="hiring_date" class="form-control" id="dateEmbauche" value="{{ old('hiring_date') }}" required/>
        </div>

        <div class="form-group col-lg-12">
            <label for="specialite1">Spécialité(s) :</label>
            <select name="specialties[]" id="specialties" class="form-control" multiple>
                @foreach($specialties as $specialty)
                <option value="{{ $specialty->id }}">{{ $specialty->label }}</option>
                @endforeach
            </select>
        </div>

        {{ csrf_field() }}

        <div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Ajouter">
        </div>
    </form>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection
