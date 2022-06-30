@extends('layouts.app')

@section('title', 'Message with link')

@section('content')
    @include('components.note.nav')
    @include('components.encryption-link.form')
    @include('components.home.footer')
@endsection
