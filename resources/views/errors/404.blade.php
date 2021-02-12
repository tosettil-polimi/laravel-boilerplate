@extends('main_layout.main_layout')

@section('title', __('strings.error_404'))
@section('keywords', __('home.keywords'))
@section('description', __('home.description'))
@section('main_image', asset('assets/img/slider/home.jpg'))

@section('content')
    <div class="breadcroumb-area bread-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ __('strings.error_404') }}</h1>
                        <a class="header-btn main-btn" href="{{ url('home') }}">{{ __('strings.back_home') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Contact Area -->
@endsection
