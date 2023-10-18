@extends('layouts.app')
@section('title', 'Documents')
@section('content')

        <div class="row">
            <div class="col-12 text-center pt-2">
                <h2 class="display-one">
                    @lang('lang.text_add_document')
                </h2>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card  shadow-lg border-0">
                    <form method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title">@lang('lang.text_title') (EN)</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                                    @if($errors->has('title'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('title')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-grup col-12">
                                    <label for="title_fr">@lang('lang.text_title') (FR)</label>
                                    <input type="text" id="title_fr" name="title_fr" class="form-control" value="{{old('title_fr')}}">
                                    @if($errors->has('title_fr'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('title_fr')}}
                                        </div>
                                    @endif
                                </div>
                        </div>
                        <div class="card-body">   
                            <div class="control-grup col-12">
                                <label for="document_name">@lang('lang.text_upload_document') (PDF, ZIP, DOC)</label>
                                <input type="file" id="document_name" name="document_name" class="form-control" accept=".pdf, .zip, .doc" max="8388608">
                            </div>
                            @if($errors->has('document_name'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('document_name')}}
                                        </div>
                            @endif
                        </div>
                        <div class="d-grid mx-auto">
                            <input type="submit" class="btn text-muted shadow-lg m-3" value="@lang('lang.text_add')">
                        </div>
                    </form>
                </div>
            </div>
        </div>
 @endsection