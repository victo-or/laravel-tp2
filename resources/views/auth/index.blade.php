@extends('layouts.app')
@section('title', __('lang.text_sign_in'))
@section('content')

        @if(!$errors->isEmpty())
            <ul>
            @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h2 class="display-one">
                    @lang('lang.text_sign_in')
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg border-0">
                    <form method="post">
                    @csrf
                        <div class="card-body">   
                            <div class="control-grup col-12">
                                <label for="email">@lang('lang.text_email')</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                                @if($errors->has('email'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('email')}}
                                        </div>
                                @endif
                            </div>
                            <div class="control-grup col-12">
                                <label for="password">@lang('lang.text_password')</label>
                                <input type="password" id="password" name="password" class="form-control">
                                @if($errors->has('password'))
                                        <div class="text-danger mt-2">
                                            <!-- first ici, va prendre la première erreur -->
                                            {{$errors->first('password')}}
                                        </div>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <input type="submit" class="btn text-muted shadow-lg btn-block mt-3" value="@lang('lang.text_sign_in')">
                            </div>
                        </div>
                        <!-- <div class="card-footer">

                        </div> -->
                    </form>
                </div>
            </div>
        </div>
@endsection