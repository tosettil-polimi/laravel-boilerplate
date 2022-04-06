@extends('main_layout.main_layout')

@section('title', __('strings.cookie_policy'))
@section('keywords', '')
@section('description', '')
@section('main_image', asset(''))

@section('content')
    <x-breadcrumb-component
        img="https://via.placeholder.com/1627x393"
        :title="__('strings.cookie_policy')" ></x-breadcrumb-component>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto pt-5 pb-5">
                {!! $cookies !!}
            </div>
        </div>
    </div>
@endsection
