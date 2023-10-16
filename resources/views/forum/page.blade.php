@extends('layouts.app')
@section('title', 'Forum')
@section('content')

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('lang.text_title')</th>
                </tr>
            </thead>
            <tbody>
                @foreach($forumPosts as $forumPost)
                    <tr>
                        <td>{{ $forumPost->id}}</td>
                        <td>{{ $forumPost->title}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $forumPosts }}
    </div>
</div>
@endsection