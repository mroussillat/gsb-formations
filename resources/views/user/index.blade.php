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

<div class="col-lg-9">
    <table class="table">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Date d'embauche</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->hiring_date }}</td>
                <td><a class="btn btn-default" href="{{ url('user/edit', [$user->id]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                <td><a class="btn btn-default" href="{{ url('user/delete', [$user->id]) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
            </tr>
            @endforeach
        </tbody>

        <tfooter>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Date d'embauche</th>
                <th></th>
                <th></th>
            </tr>
        </tfooter>
    </table>
</div>
@endsection
