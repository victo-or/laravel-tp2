@extends('layouts.app')
@section('title', 'Connexion')
@section('content')
        <hr>
        @if(!$errors->isEmpty())
            <ul>
            @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <form method="post">
                    @csrf
                        <div class="card-header">
                            <h3>Connecter</h3>
                        </div>
                        <div class="card-body">   
                            <div class="control-grup col-12">
                                <label for="email">Courriel</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                                @if($errors->has('email'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('email')}}
                                        </div>
                                @endif
                            </div>
                            <div class="control-grup col-12">
                                <label for="password">Mot de passe</label>
                                <input type="password" id="password" name="password" class="form-control">
                                @if($errors->has('password'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('password')}}
                                        </div>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid mx-auto">
                                <input type="submit" class="btn btn-success btn-block" value="Connecter">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection