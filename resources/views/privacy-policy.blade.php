@extends('main_layout.main_layout')

@section('title', __('strings.privacy_policy'))
@section('keywords', '')
@section('description', '')
@section('main_image', asset(''))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto pt-5 pb-5">
                {!! $privacy !!}
            </div>
        </div>
    </div>
@endsection
