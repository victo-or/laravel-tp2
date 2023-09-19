@extends('layouts.app')
@section('title', 'Ajouter un étudiant')
@section('content')

        <div class="row">
            <div class="col-12 text-center pt-2">
                <h2 class="display-one">
                    Ajouter un étudiant
                </h2>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="post">
                    @csrf
                        <div class="card-header">
                            Formulaire d'ajout
                        </div>
                        <div class="card-body">   
                                <div class="control-group col-12">
                                    <label for="nom">Nom</label>
                                    <input type="text" id="nom" name="nom" class="form-control">
                                </div>
                                <div class="control-group col-12">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" id="adresse" name="adresse" class="form-control">
                                </div>
                                <div class="control-group col-12">
                                    <label for="phone">Numéro de téléphone</label>
                                    <input type="text" id="phone" name="phone" class="form-control">
                                </div>
                                <div class="control-group col-12">
                                    <label for="email">Adresse courriel</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                                <div class="control-group col-12">
                                    <label for="ddc">Date de naissance</label>
                                    <input type="date" id="ddc" name="date_de_naissance" class="form-control">
                                </div>
                                <div class="control-group col-12">
                                    <label for="ville">Ville</label>
                                    <select name="ville_id" id="ville" class="col-12">
                                        
                                        @forelse($villes as $ville)
                                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                        @empty
                                            <option>Aucune ville disponible</option>
                                        @endforelse
                                    </select>
                                </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Ajouter" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
 @endsection