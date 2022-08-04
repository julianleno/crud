@extends('layouts.app')
@section('title', 'Criar usuário')
@section('content')

    <h1>Criar novo Usuário</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Senha">
        <input type="submit" value="Criar usuário">
    </form>

    <a href="{{ route('users.index') }}">Voltar</a>
@endsection
