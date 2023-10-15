@extends('layouts.app')
@section('title', 'Ajouter un article')
@section('content')

        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">
                    Ajouter un article
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="post">
                    @csrf
                        <div class="card-header">
                            Formulaire
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                                    @if($errors->has('title'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('title')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-grup col-12">
                                    <label for="text">Text</label>
                                    <textarea class="form-control" id="text" name="body">{{old('body')}}</textarea>
                                    @if($errors->has('body'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('body')}}
                                        </div>
                                    @endif
                                </div>
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title_fr">Titre</label>
                                    <input type="text" id="title_fr" name="title_fr" class="form-control" value="{{old('title_fr')}}">
                                    @if($errors->has('title_fr'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('title_fr')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-grup col-12">
                                    <label for="text_fr">Texte</label>
                                    <textarea class="form-control" id="text_fr" name="body_fr">{{old('body_fr')}}</textarea>
                                    @if($errors->has('body_fr'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('body_fr')}}
                                        </div>
                                    @endif
                                </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-success" value="Post">
                        </div>
                    </form>
                </div>
            </div>
        </div>
       {{-- <div>
            {{ $abc }}
        </div> --}}
 @endsection