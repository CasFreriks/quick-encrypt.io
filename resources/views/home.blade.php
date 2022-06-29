@extends('layouts.app')

@section('title', 'home')

@section('content')
    @include('components.home.header')
    @include('components.home.features')
    @include('components.home.faq')
    @include('components.home.footer')
@endsection
