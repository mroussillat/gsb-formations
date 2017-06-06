@extends('layouts.app')

@section('title', 'Formations')

@section('content')
<div class="col-lg-4">
    <form method="POST" action="{{ url('session/edit', [$session->id]) }}">
        <div class="form-group">
            <label for="label">Nombre de places :</label>
            <input type="text" name="number_of_place" class="form-control" id="number_of_place" value="{{ $session->number_of_place }}" required/>
        </div>
		
		<div class="form-group">
            <label for="label">Id formation :</label>
            <input type="text" name="formation_id" class="form-control" id="formation_id" value="{{ $session->formation_id }}" required/>
        </div>
		
		<div class="form-group">
            <label for="label">Date :</label>
            <input type="text" name="date" class="form-control" id="date" value="{{ $session->date }}" required/>
        </div> 
        {{ csrf_field() }}
        <input type="submit" class="btn btn-success" value="@lang('app.save')">
    </form>
</div>

<div class="col-lg-12">
    <a href="{{ url('session') }}">Retournez à la liste des sessions</a>
</div>
@endsection
