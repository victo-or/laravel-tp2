@extends('layouts.app')
@section('title', 'Forum')
@section('content')

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('forum.create')}}" class='btn text-muted shadow-lg'>@lang('lang.text_add')</a>
</div>

<div class="row">
    <div class="col-12 text-center pt-2">
        <h2 class="display-one">
            Forum
        </h2>
    </div>
</div>

<div class="card shadow-lg border-0">
    <div class="card-body">
        @if ($posts->isEmpty())
            <p>@lang('lang.text_no_post')</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>@lang('lang.text_user')</th>
                        <th>@lang('lang.text_title')</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->forumHasUser->name }}</td>
                            <td>
                                <a href="{{ route('forum.show', $post->id) }}">{{ $post->title }}</a>
                            </td>
                            <td>
                                @if (Auth::user()->id === $post->user_id)
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('forum.edit', $post->id) }}" class="btn text-muted shadow-lg m-1">@lang('lang.text_modify')</a>
                                        <button type="button" class="btn text-muted shadow-lg m-1" data-bs-toggle="modal" data-bs-target="#deleteModal{{$post->id}}">
                                            @lang('lang.text_delete')
                                        </button>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $posts }}
        @endif
    </div>
</div>

</div>
</div>
</div>

<!-- Modal -->
@foreach($posts as $post)
<div class="modal fade" id="deleteModal{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('lang.text_delete')</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @lang('lang.text_modale_delete') {{ $post->title}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('lang.text_close')</button>
                <form action="{{route('forum.delete', $post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="@lang('lang.text_delete')" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
