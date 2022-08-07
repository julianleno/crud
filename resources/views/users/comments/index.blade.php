@extends('layouts.app')
@section('title', "Comentários do {$user->name}")
@section('content')

<div class="container mx-auto px-4 flex-row bg-white shadow p-5 m-5">

        <h1 class="text-3xl font-extrabold justify-center align-middle px-3 my-3 tracking-tight text-gray-900 sm:text-4xl flex">Comentários do {{$user->name}}</h1>
        <div class="lg:flex-items">
            <div class="flex-none h-5 w-10 ml-2 hidden rounded-full bg-sky-500 hover:bg-sky-600 hover:transition-colors px-1.5 py-0.5 text-xs text-white sm:block"><a href="{{ route('users.create') }}">Add</a></div>
        </div>


        <form action="{{ route('users.index') }}" method="get">
            <div class="sm:rounded-md sm:overflow-hidden">

                <label for="Buscar Comentário" class="block text-sm font-medium text-gray-700"> Buscar comentário </label>
                  <div class="mt-1 flex rounded-md">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> 🔎 </span>
                    <input type="text" name="search"  class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm" placeholder="Buscar Usuário">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Buscar Usuário</button>
                </div>
            </div>
        </form>
        <ul class="p-10 flex-row">
                @foreach ($comments as $comment)
                    <li class="p-2 font-medium border divide-y divide-blue-200">
                        {{ $user->body}} -
                        {{ $user->visible }}
                        <a href="{{ route('users.edit', $user->id) }}" class="inline-flex w-20 justify-center rounded-full bg-sky-500 hover:bg-sky-600 hover:transition-colors px-1.5 py-0.5 text-xs text-white sm:block">Editar</a>
                        <a href="{{ route('users.show', $user->id) }}" class="inline-flex w-20 justify-center rounded-full bg-indigo-500 hover:bg-indigo-600 hover:transition-colors px-1.5 py-0.5 text-xs text-white sm:block">Detalhes</a>
                    </li>
                @endforeach
            </ul>

</div>
@endsection
