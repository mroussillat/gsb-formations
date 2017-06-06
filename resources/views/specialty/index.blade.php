@extends('layouts.app')

@section('title', 'Spécialités')

@section('content')
<div class="col-lg-2">
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>Spécialités</h3>
            <h5>Liste de toutes les spécialités</h5>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Ajouter une spécialité</div>
        <div class="panel-body">
            <form method="POST" action="{{ url('specialty') }}">
                <div class="form-group">
                    <label for="libelle">Libellé :</label>
                    <input type="text" name="label" class="form-control" id="libelle" required/>
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
                <th>Libellé</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($specialties as $specialty)
            <form method="POST" action="{{ url('specialty/edit', [$specialty->id]) }}">
                <tr>
                    <td>{{ $specialty->label }}</td>
                    <td><a class="btn btn-default" href="{{ url('specialty/edit', [$specialty->id]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a class="btn btn-default" href="{{ url('specialty/delete', [$specialty->id]) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>
                {{ csrf_field() }}
            </form>
            @endforeach
        </tbody>

        <tfooter>
            <tr>
                <th>Libellé</th>
                <th></th>
                <th></th>
            </tr>
        </tfooter>
    </table>
</div>
@endsection
