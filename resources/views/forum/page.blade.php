@extends('layouts.app')
@section('title', 'Pagination')
@section('content')

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
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