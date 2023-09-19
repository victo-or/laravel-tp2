@extends('layouts.app')
@section('title', 'Accueil')
@section('content')

    <p>
        Bienvenu chez Anonymous recruit
    </p>
    <a href="{{route('etudiant.index')}}" class="btn btn-outline-light shadow-lg">Voir la liste d'étudiants</a>

@endsection
