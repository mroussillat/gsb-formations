@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<h3>Bienvenue <b>{{ Auth::user()->name() }}</b> !</h3>
@endsection
