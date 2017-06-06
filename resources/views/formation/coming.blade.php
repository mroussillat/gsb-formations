@extends('layouts.app')

@section('title', 'Formations')

@section('content')
<div class="col-lg-2">
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>Mes formations</h3>
            <h5>Liste de toutes mes formations</h5>
        </div>
    </div>
</div>

<div class="col-lg-10">
    <table class="table">
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Description</th>
                <th>Statut</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach (Auth::user()->formations() as $formation)
            <tr>
                <td>{{ $formation->formation()->label }}</td>
                <td>{{ $formation->formation()->description }}</td>
                @if($formation->status == 'Waiting')
                <td>En attente</td>
                @elseif($formation->status == 'Accepted')
                <td>Accepté</td>
                @else
                <td>Refusé</td>
                @endif
                <td><a class="btn btn-default" href="{{ url('formation/cancel', [$formation->formation()->id]) }}">Annuler</a></td>
                <td><a class="btn btn-default" href="{{ url('formation/show', [$formation->formation()->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            </tr>
            @endforeach
        </tbody>

        <tfooter>
            <tr>
                <th>Libellé</th>
                <th>Description</th>
                <th>Statut</th>
                <th></th>
            </tr>
        </tfooter>
    </table>
</div>
@endsection
