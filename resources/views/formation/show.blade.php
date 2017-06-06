@extends('layouts.app')

@section('title', 'Formations')

@section('content')
<div class="col-lg-4">
	<div class="form-group">
            <label for="places">Nombre de places :</label>
            <?php
				$sessions = DB::table('session')->where('formation_id', $formation->id)->get();
				$nb=0;
				foreach ($sessions as $session) {
					$nb = $nb + $session->number_of_place;
				}
			?>
            <input type="text" name="places" class="form-control" id="places" value="{{ $nb }}" readonly>
    </div>
    <div class="form-group">
        <label for="label">Libellé :</label>
        <input type="text" name="label" class="form-control" id="label" value="{{ $formation->label }}" readonly>
    </div>
    <div class="form-group">
        <label for="description">Description :</label>
        <input type="text" name="description" class="form-control" id="description" value="{{ $formation->description }}" readonly>
    </div>
</div>

<div class="col-lg-12">
    <a href="{{ url('formation/coming') }}">Retourner à la liste de mes formations</a>
</div>
@endsection
