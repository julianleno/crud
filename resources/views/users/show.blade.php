@extends('layouts.app')
@section('title', 'Detalhes do Usuário')
@section('content')
    <h1>Detalhes do usuário {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>
    </ul>

    <a href="{{ route('users.index') }}">Voltar</a>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Deletar usuário
        </button>
    </form>
@endsection


