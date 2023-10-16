@extends('layouts.app')
@section('title', 'Forum')
@section('content')
<hr>
    <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ route('forum.index')}}" class="btn btn-outline-primary btn-sm">@lang('lang.text_return')</a>
            <h4 class="display-4 mt-5">
                {{ $forumPost->title }}
            </h4>
            <hr>
            <p>
                {!! $forumPost->body !!}
            </p>
            <p>
                <strong>@lang('lang.text_author'): </strong> {{ $forumPost->forumHasUser->name }}
            </p>
        </div>
    </div>
    <hr>
    <div class="row mb-5">
        <div class="col-4">
            <a href="{{route('forum.showPDF', $forumPost->id)}}" class="btn btn-warning">PDF</a>
        </div>
        <div class="col-4">
            <a href="{{route('forum.edit', $forumPost->id)}}" class="btn btn-primary">@lang('lang.text_modify')</a>
        </div>
        <div class="col-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            @lang('lang.text_delete')
            </button>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('lang.text_delete')</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      @lang('lang.text_modale_delete') {{ $forumPost->title}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('lang.text_close')</button>
        <form action="{{route('forum.delete', $forumPost->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="@lang('lang.text_delete')" class="btn btn-danger">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection