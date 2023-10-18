@extends('layouts.app')
@section('title', __('lang.text_students'))
@section('content')
    <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ route('etudiant.index')}}" class="btn text-muted shadow-lg btn-sm">Retourner</a>
            <h2 class="mt-5">
                {{ $etudiant->nom }}
            </h2>
            <table class="table shadow-lg table-custom">
                <tr>
                    <td><strong>@lang('lang.text_adress'):</strong></td>
                    <td>{{ $etudiant->adresse }}</td>
                </tr>
                <tr>
                    <td><strong>@lang('lang.text_phone'):</strong></td>
                    <td>{{ $etudiant->phone }}</td>
                </tr>
                <tr>
                    <td><strong>@lang('lang.text_email'):</strong></td>
                    <td>{{ $etudiant->email }}</td>
                </tr>
                <tr>
                    <td><strong>@lang('lang.text_birthdate'):</strong></td>
                    <td>{{ $etudiant->date_de_naissance }}</td>
                </tr>
                <tr>
                    <td><strong>@lang('lang.text_city'):</strong></td>
                    <td>{{ $etudiant->etudiantHasVille->nom }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="{{route('etudiant.edit', $etudiant->user_id)}}" class="btn text-muted shadow-lg">@lang('lang.text_update')</a>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <button type="button" class="btn text-muted shadow-lg" data-bs-toggle="modal" data-bs-target="#deleteModal">
                @lang('lang.text_delete')
            </button>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Voulez-vous vraiment effacer les donnée de {{ $etudiant->nom }}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <form action="{{route('etudiant.delete', $etudiant->user_id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Effacer" class="btn btn-danger">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection