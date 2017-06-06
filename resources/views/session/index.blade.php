@extends('layouts.app')

@section('title', 'Sessions')

@section('content')
<div class="col-lg-2">
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>Sessions</h3>
            <h5>Liste de toutes les sessions</h5>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Ajouter une session</div>
        <div class="panel-body">
            <form method="POST" action="{{ url('session') }}">
                <div class="form-group">
                  
                    <label for="nbPlaces">Id formation :</label>
                    <input type="text" name="formation_id" class="form-control" id="formation_id" required/>
                    
                    <label for="nbPlaces">Nombre de places :</label>
                    <input type="text" name="number_of_place" class="form-control" id="number_of_place" required/>
					
					<label for="nbPlaces">Date :</label>
                    <input type="text" name="date" class="form-control" id="date" required/>
                    
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="Ajouter">
            </form>

            @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>

<div class="col-lg-9">
    <table class="table">
        <thead>
            <tr>
                <th>Formation</th>
                <th>Nombre de places</th>
				<th>Date</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($sessions as $session)
            <form method="POST" action="{{ url('session/edit', [$session->id]) }}">
                <tr>	
				<?php
					$formation = DB::table('formation')->where('id', $session->formation_id)->first();
				?>
                    <td>{{ $formation->label }}</td>
					<td>{{ $session->number_of_place }}</td>
					<td>{{ $session->date }}</td>
                    <td><a class="btn btn-default" href="{{ url('session/edit', [$session->id]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a class="btn btn-default" href="{{ url('session/delete', [$session->id]) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>
                {{ csrf_field() }}
            </form>
            @endforeach
        </tbody>

        <tfooter>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfooter>
    </table>
</div>
@endsection
