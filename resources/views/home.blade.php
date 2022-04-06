@extends('main_layout.main_layout')

@section('title', '')
@section('keywords', '')
@section('description', '')
@section('main_image', '')

@section('content')
    <x-breadcrumb-component
        img="https://via.placeholder.com/1627x393"
        :title="__('strings.site_name')" ></x-breadcrumb-component>
@endsection
