@extends('layouts.app')

@section('title', 'Formations')

@section('content')
<div class="col-lg-4">
    <form method="POST" action="{{ url('specialty/edit', [$specialty->id]) }}">
        <div class="form-group">
            <label for="label">Libellé :</label>
            <input type="text" name="label" class="form-control" id="label" value="{{ $specialty->label }}" required/>
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-success" value="@lang('app.save')">
    </form>
</div>

<div class="col-lg-12">
    <a href="{{ url('specialty') }}">Retournez à la liste des spécialités</a>
</div>
@endsection
