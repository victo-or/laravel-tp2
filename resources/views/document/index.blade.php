@extends('layouts.app')
@section('title', 'Documents')
@section('content')


<div class="d-flex justify-content-end mb-3">
            <a href="{{ route('document.create')}}" class='btn btn-outline-light shadow-lg'>@lang('lang.text_add')</a>
</div>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="card">
    <div class="card-body">
    @if ($documents->isEmpty())
        <p>No document available</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('lang.text_user')</th>
                    <th>@lang('lang.text_title')</th>
                    <th>@lang('lang.text_file')</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documents as $document)
                    <tr>
                        <td>{{ $document->id }}</td>
                        <td>{{ $document->documentHasUser->name }}</td>
                        <td>{{ $document->title }}</td>
                        <td>
                            <a href="{{ asset('uploads/' . $document->document_name) }}" download="{{ $document->document_name }}">@lang('lang.text_download')</a>
                        </td>
                        <td>
                            @if (Auth::user()->id === $document->user_id)
                            <div class="d-flex justify-content-end">
                                <a href="{{route('document.edit', $document->id)}}" class="btn btn-primary m-1">@lang('lang.text_modify')</a>
                                <!-- <form action="{{route('document.delete', $document->id)}}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-1">Supprimer</button>
                                </form> -->
                                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    @lang('lang.text_delete')
                                </button>
                            </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $documents }}
        @endif
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
        @lang('lang.text_modale_delete') {{ $document->title}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('lang.text_close')</button>
        <form action="{{route('document.delete', $document->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="@lang('lang.text_delete')" class="btn btn-danger">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection