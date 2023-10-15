@extends('layouts.app')
@section('title', 'Mettre a jour')
@section('content')

        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">
                    Mettre a jour
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="post">
                    @method('put')
                    @csrf
                        <div class="card-header">
                            Formulaire
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{$forumPost->title}}">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="text">Text</label>
                                    <textarea class="form-control" id="text" name="body">{{$forumPost->body}}</textarea>
                                </div>
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title_fr">Titre</label>
                                    <input type="text" id="title_fr" name="title_fr" class="form-control"  value="{{$forumPost->title_fr}}">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="text_fr">Texte</label>
                                    <textarea class="form-control" id="text_fr" name="body_fr">{{$forumPost->body_fr}}</textarea>
                                </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
       {{-- <div>
            {{ $abc }}
        </div> --}}
 @endsection