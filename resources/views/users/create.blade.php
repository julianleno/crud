@extends('layouts.app')
@section('title', 'Criar usuário')
@section('content')

    <h1>Criar novo Usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('users.partials.form')

    <a href="{{ route('users.index') }}">Voltar</a>
@endsection
