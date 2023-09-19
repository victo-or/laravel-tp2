@extends('layouts.app')
@section('title', 'Mettre à jour')
@section('content')

        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">
                    Mettre à jour
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="post">
                    @method('put')
                    @csrf
                    <div class="card-header">
                            Formulaire
                        </div>
                        <div class="card-body">   
                                <div class="control-group col-12">
                                    <label for="nom">Nom</label>
                                    <input type="text" id="nom" name="nom" class="form-control" value="{{ $etudiant->nom }}">
                                </div>
                                <div class="control-group col-12">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" id="adresse" name="adresse" class="form-control" value="{{ $etudiant->adresse }}">
                                </div>
                                <div class="control-group col-12">
                                    <label for="phone">Numéro de téléphone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $etudiant->phone }}">
                                </div>
                                <div class="control-group col-12">
                                    <label for="email">Adresse courriel</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ $etudiant->email }}">
                                </div>
                                <div class="control-group col-12">
                                    <label for="ddc">Date de naissance</label>
                                    <input type="date" id="ddc" name="date_de_naissance" class="form-control" value="{{ $etudiant->date_de_naissance }}">
                                </div>
                                <div class="control-group col-12">
                                    <label for="ville">Ville</label>
                                    <select name="ville_id" id="ville" class="col-12">
                                        @forelse($villes as $ville)
                                            <option value="{{ $ville->id }}" @if($ville->id == $etudiant->ville_id) selected @endif>
                                                {{ $ville->nom }}
                                            </option>
                                        @empty
                                            <option>Aucune ville disponible</option>
                                        @endforelse
                                    </select>
                                </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Modifier" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div>
            {{ $abc }}
        </div> --}}
@endsection

