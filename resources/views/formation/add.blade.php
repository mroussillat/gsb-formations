@extends('layouts.app')

@section('title', 'Formations')

@section('content')
<div class="col-lg-3">
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>Formations</h3>
            <h5>Ajouter une nouvelle formation</h5>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <form method="POST" action="{{ url('formation/add') }}">
        <div class="form-group col-lg-6">
            <label for="label">Libellé :</label>
            <input type="text" name="label" class="form-control" id="label" required/>
        </div>
        <div class="form-group col-lg-6">
            <label for="description">Description :</label>
            <input type="text" name="description" class="form-control" id="description"/>
        </div>
        {{ csrf_field() }}
        <div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Ajouter">
        </div>
    </form>
    @if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</div>
@endsection
