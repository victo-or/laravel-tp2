@extends('layouts.app')
@section('title', 'Forum')
@section('content')

    <hr>
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('forum.create')}}" class='btn btn-primary'>@lang('lang.text_add')</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('lang.text_post_list')</h4>
                </div>
                <div class="card-body">
                    
                    <ul>
                        @forelse($posts as $post)
                            <li><a href="{{route('forum.show', $post->id)}}">{{ $post->title }}</a></li>
                        @empty
                            <li class='text-danger'>@lang('lang.text_no_post')</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
