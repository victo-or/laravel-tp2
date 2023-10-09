@extends('layouts.app')
@section('title', 'Liste des utilisateurs')
@section('content')
    <hr>
    <div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>
                            <ul>
                                @forelse($user->userHasPosts as $post)
                                    <li><a href="{{ route('blog.show', $post->id)}}">{{ $post->title }}</a></li>
                                @empty
                                    <li>Pas de posts</li>
                                @endforelse
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users }}
    </div>
@endsection