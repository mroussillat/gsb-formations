@extends('layouts.app')

@section('title', 'Utilisateur')

@section('content')
<div class="col-lg-3">
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>Utilisateurs</h3>
            <h5>Édition d'un utilisateur</h5>
        </div>
    </div>
</div>

<div class="col-lg-4">
	<form method="post" action="{{ url('user/edit', [$user->id]) }}">
		<div class="form-group col-lg-6">
			<label for="inputFirstname">Prénom :</label>
			<input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}" id="inputFirstname"/>
		</div>

		<div class="form-group col-lg-6">
			<label for="inputSurname">Nom:</label>
			<input type="text" name="surname" class="form-control" value="{{ $user->surname }}" id="inputSurname" required/>
		</div>

		<div class="form-group col-lg-6">
			<label for="inputLogin">Identifiant :</label>
			<input type="text" name="login" class="form-control" value="{{ $user->login }}" id="inputLogin"/>
		</div>

		<div class="form-group col-lg-6">
			<label for="inputPassword">Mot de passe :</label>
			<input type="password" name="password" class="form-control" value="" id="inputPassword"/>
		</div>

		<div class="form-group col-lg-6">
            <label for="selectDelegate">Délégué :</label>
            <select name="delegate" id="selectDelegate" class="form-control">
				<option value=""></option>
                @foreach($users as $u)
				<option value="{{ $u->id }}">{{ $u->firstname . ' ' . $u->surname }}</option>
				@endforeach
            </select>
        </div>

		<div class="form-group col-lg-6">
			<label for="selectResponsible">Responsable :</label>
			<select name="responsible" id="selectResponsible" class="form-control">
				<option value=""></option>
				@foreach($users as $u)
				<option value="{{ $u->id }}">{{ $u->firstname . ' ' . $u->surname }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-lg-3">
			<label for="inputPostalCode">Code postal :</label>
			<input type="text" name="postal_code" class="form-control" value="{{ $user->postal_code }}" id="inputPostalCode"/>
		</div>

		<div class="form-group col-lg-9">
			<label for="inputCity">Ville :</label>
			<input type="text" name="city" class="form-control" value="{{ $user->city }}" id="inputCity"/>
		</div>

		<div class="form-group col-lg-12">
			<label for="inputAddress">Adresse :</label>
			<input type="text" name="adress" class="form-control" value="{{ $user->adress }}" id="inputAddress"/>
		</div>

		<div class="form-group col-lg-5">
			<label for="inputHiringDate">Date d'embauche :</label>
			<input type="date" name="hiring_date" class="form-control" value="{{ $user->hiring_date }}" id="inputHiringDate"/>
		</div>

		<div class="form-group col-lg-8">
            <label for="selectSpecialities">Spécialité(s) :</label>
            <select name="specialties[]" id="selectSpecialities" class="form-control" multiple>
                @foreach($specialties as $specialty)
				<option value="{{ $specialty->id }}" @if($user->specialties->contains($specialty->id)) selected @endif>{{ $specialty->label }}</option>
				@endforeach
            </select>
        </div>

	    {{ csrf_field() }}
		<div class="form-group col-lg-offset-11">
			<button type="submit" class="btn btn-success">Sauvegarder</button>
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
