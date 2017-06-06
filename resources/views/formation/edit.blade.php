@extends('layouts.app')

@section('title', 'Formations')

@section('content')
<div class="col-lg-4">
    <form method="POST" action="{{ url('formation/edit', [$formation->id]) }}">
        <div class="form-group">
            <label for="label">Libellé :</label>
            <input type="text" name="label" class="form-control" id="label" value="{{ $formation->label }}" required/>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" name="description" class="form-control" id="description" value="{{ $formation->description }}"/>
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-success" value="Sauvegarder">
    </form>
</div>

<div class="col-lg-12">
    <a href="{{ url('formation/list') }}">Retourner à la liste des formations</a>
</div>
@endsection
