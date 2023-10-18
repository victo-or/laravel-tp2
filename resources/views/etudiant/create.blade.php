@extends('layouts.app')
@section('title', __('lang.text_students'))
@section('content')
        <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ route('etudiant.index')}}" class="btn text-muted shadow-lg btn-sm">@lang('lang.text_return')</a>
        </div>
        <div class="col-12 text-center pt-2">
            <h2 class="display-one">
                @lang('lang.text_add_student')
            </h2>
        </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <form method="post">
                    @csrf
                        <div class="card-body">   
                                <div class="control-group col-12">
                                    <label for="nom">@lang('lang.text_name')</label>
                                    <input type="text" id="nom" name="nom" class="form-control" value="{{old('nom')}}">
                                    @if($errors->has('nom'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('nom')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-group col-12">
                                    <label for="adresse">@lang('lang.text_adress')</label>
                                    <input type="text" id="adresse" name="adresse" class="form-control" value="{{old('adresse')}}">
                                    @if($errors->has('adresse'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('adresse')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-group col-12">
                                    <label for="phone">@lang('lang.text_phone')</label>
                                    <input type="text" id="phone" name="phone" placeholder="123-345-6789" class="form-control" value="{{old('phone')}}">
                                    @if($errors->has('phone'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('phone')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-group col-12">
                                    <label for="email">@lang('lang.text_email')</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-group col-12">
                                    <label for="ddc">@lang('lang.text_birthdate')</label>
                                    <input type="date" id="ddc" name="date_de_naissance" class="form-control" value="{{old('date_de_naissance')}}">
                                    @if($errors->has('date_de_naissance'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('date_de_naissance')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-group col-12">
                                    <label for="ville">@lang('lang.text_city')</label>
                                    <select name="ville_id" id="ville" class="col-12">
                                        
                                        @forelse($villes as $ville)
                                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                        @empty
                                            <option>@lang('lang.text_no_city')</option>
                                        @endforelse
                                    </select>
                                    @if($errors->has('ville_id'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('ville_id')}}
                                        </div>
                                    @endif
                                </div>
                        </div>
                        <div class="d-grid mx-auto">
                            <input type="submit" value="@lang('lang.text_add')" class="btn text-muted shadow-lg m-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
 @endsection