@extends('layouts.app')
@section('title', __('lang.text_students'))
@section('content')

    <div class="row">

        <div class="d-flex justify-content-end">
            <a href="{{ route('etudiant.create')}}" class='btn text-muted shadow-lg'>@lang('lang.text_add')</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="row">
                <div class="col-12 text-center pt-2">
                    <h2 class="display-one">
                        @lang('lang.text_student_list')
                    </h2>
                </div>
            </div>
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    
                    <ul>
                        @forelse($etudiants as $etudiant)
                            <li><a href="{{route('etudiant.show', $etudiant->user_id)}}">{{ $etudiant->nom }}</a></li>
                        @empty
                            <li class='text-danger'>@lang('lang.text_no_student')</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
