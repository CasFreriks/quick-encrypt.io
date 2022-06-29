@extends('layouts.app')

@section('title', 'note')

@section('content')
    @include('components.note.nav')
    @include('components.note.note')

@endsection
