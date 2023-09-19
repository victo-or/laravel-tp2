@extends('layouts.app')
@section('title', 'Liste des étudiants')
@section('content')

    <div class="row">

        <div class="d-flex justify-content-end">
            <a href="{{ route('etudiant.create')}}" class='btn btn-outline-light shadow-lg'>Ajouter</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h2 class="display-one">
                    Liste des étudiants
                </h2>
            </div>
        </div>
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    
                    <ul>
                        @forelse($etudiants as $etudiant)
                            <li><a href="{{route('etudiant.show', $etudiant->id)}}">{{ $etudiant->nom }}</a></li>
                        @empty
                            <li class='text-danger'>Aucun étudiant disponible</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
