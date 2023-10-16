@extends('layouts.app')
@section('title', 'Forum')
@section('content')

        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">
                    @lang('lang.text_modify_article')
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
                            @lang('lang.text_form')
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title">@lang('lang.text_title') (EN)</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{$forumPost->title}}">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="text">@lang('lang.text_text') (EN)</label>
                                    <textarea class="form-control" id="text" name="body">{{$forumPost->body}}</textarea>
                                </div>
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title_fr">@lang('lang.text_title') (FR)</label>
                                    <input type="text" id="title_fr" name="title_fr" class="form-control"  value="{{$forumPost->title_fr}}">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="text_fr">@lang('lang.text_text') (FR)</label>
                                    <textarea class="form-control" id="text_fr" name="body_fr">{{$forumPost->body_fr}}</textarea>
                                </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-success" value="@lang('lang.text_update')">
                        </div>
                    </form>
                </div>
            </div>
        </div>
 @endsection