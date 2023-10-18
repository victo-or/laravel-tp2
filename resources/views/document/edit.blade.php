@extends('layouts.app')
@section('title', 'Documents')
@section('content')

        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">
                    @lang('lang.text_modify_document')
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <form method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                        <!-- <div class="card-header">
                            @lang('lang.text_form')
                        </div> -->
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title">@lang('lang.text_title') (EN)</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{ $document->title }}">
                                    @if($errors->has('title'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('title')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-grup col-12">
                                    <label for="title_fr">@lang('lang.text_title') (FR)</label>
                                    <input type="text" id="title_fr" name="title_fr" class="form-control" value="{{ $document->title_fr }}">
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
                                <input type="file" id="document_name" name="document_name" class="form-control" accept=".pdf, .zip, .doc">
                            </div>
                        </div>
                        <div class="d-grid mx-auto">
                            <input type="submit" class="btn text-muted shadow-lg btn-block mt-3" value="@lang('lang.text_update')">
                        </div>
                    </form>
                </div>
            </div>
        </div>
 @endsection