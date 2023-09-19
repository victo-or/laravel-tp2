@extends('layouts.app')
@section('title', 'Liste des étudiants')
@section('content')

    <hr>
    <div class="row">
        <!-- <div class="col-md-8">
            <p>Bonne lecture</p>
        </div> -->
        <div class="d-flex justify-content-end">
            <a href="{{ route('etudiant.create')}}" class='btn btn-primary'>Ajouter</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des étudiants</h4>
                </div>
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
