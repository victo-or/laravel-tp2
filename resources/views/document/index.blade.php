@extends('layouts.app')
@section('title', 'User List')
@section('content')


<div class="d-flex justify-content-end mb-3">
            <a href="{{ route('document.create')}}" class='btn btn-outline-light shadow-lg'>Ajouter</a>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <!-- <th>#</th> -->
                    <th>User</th>
                    <th>Title</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody>
            @foreach($documents as $document)
                <tr>
                    <td>{{ $document->documentHasUser->name }}</td>
                    <td>{{ $document->title }}</td>
                    <td>
                        <a href="{{ asset('uploads/' . $document->document_name) }}" download="{{ $document->document_name }}">Télécharger</a>
                    </td>
                    @if (Auth::user()->id === $document->user_id)
                    <td>
                        <div class="d-flex justify-content-end">
                            <a href="1" class="btn btn-primary m-1">Modifier</a>
                            <form action="1" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Supprimer</button>
                            </form>
                        </div>
                    </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $documents }}
    </div>
</div>
@endsection