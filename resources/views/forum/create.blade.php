@extends('layouts.app')
@section('title', 'Forum')
@section('content')

        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">
                    @lang('lang.text_add_post')
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
                        @lang('lang.text_form')
                        </div>
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
                                    <label for="text">@lang('lang.text_text') (EN)</label>
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
                                    <label for="title_fr">@lang('lang.text_title') (FR)</label>
                                    <input type="text" id="title_fr" name="title_fr" class="form-control" value="{{old('title_fr')}}">
                                    @if($errors->has('title_fr'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('title_fr')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="control-grup col-12">
                                    <label for="text_fr">@lang('lang.text_text') (FR)</label>
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
                            <input type="submit" class="btn btn-success" value="@lang('lang.text_add')">
                        </div>
                    </form>
                </div>
            </div>
        </div>
 @endsection