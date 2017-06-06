@extends('layouts.app')

@section('title', 'Formations')

@section('content')

<div class="col-lg-3">
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>Formations</h3>
            <h5>Liste de toutes les formations</h5>
        </div>
    </div>
</div>

<div class="col-lg-9">
    <table class="table">
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Description</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($formations as  $formation)
            <tr>
                <td>{{ $formation->label }}</td>
                
                <td><a href="{{ url('formation/show', [$formation->id]) }}"></a></td>
                
                <td>{{ $formation->description }}</td>
                <td>
                    @if(!in_array($formation->id, Auth::user()->formations()->pluck('formation_id')->toArray()))
                    <a class="btn btn-default" href="{{ url('formation/apply', [$formation->id]) }}">Postuler</a>
                    @endif
                </td>
                <td><a class="btn btn-default" href="{{ url('formation/edit', [$formation->id]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                <td><a class="btn btn-default" href="{{ url('formation/delete', [$formation->id]) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                <td><a class="btn btn-default" href="{{ url('formation/show', [$formation->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            </tr>
            @endforeach
        </tbody>

        <tfooter>
            <tr>
                <th>Libellé</th>
                <th>Description</th>
                <th></th>
                <th></th>
            </tr>
        </tfooter>
    </table>
</div>
@endsection
