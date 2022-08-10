@extends('layouts.app')
@section('title', 'Listagem dos Usuários')
@section('content')

<div class="container mx-auto px-4 flex-row bg-white shadow p-5 m-5">

        <h1 class="text-3xl font-extrabold justify-center align-middle px-3 my-3 tracking-tight text-gray-900 sm:text-4xl flex">Lista de Usuarios 🧑</h1>
        <div class="lg:flex-items">
            <div class="flex-none h-5 w-10 ml-2 hidden rounded-full bg-sky-500 hover:bg-sky-600 hover:transition-colors px-1.5 py-0.5 text-xs text-white sm:block"><a href="{{ route('users.create') }}">Add</a></div>
        </div>


        <form action="{{ route('users.index') }}" method="get">
            <div class="sm:rounded-md sm:overflow-hidden">

                <label for="Buscar Usuário" class="block text-sm font-medium text-gray-700"> Buscar Usuário </label>
                  <div class="mt-1 flex rounded-md">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> 🔎 </span>
                    <input type="text" name="search"  class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm" placeholder="Buscar Usuário">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Buscar Usuário</button>
                </div>
            </div>
        </form>

        <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table class="min-w-full">
                        <thead class="bg-white border-b">
                          <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              #ID
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              Nome
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              E-mail
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">

                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">

                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">

                              </th>
                          </tr>
                        </thead>

                        @foreach ($users as $user)
                        <tbody>
                          <tr class="bg-gray-100 border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $user->id }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->name }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->email }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('users.edit', $user->id) }}" class="inline-flex w-20 justify-center rounded-full bg-sky-300 hover:bg-sky-400 hover:transition-colors px-1.5 py-0.5 text-xs text-white sm:block">Editar</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('users.show', $user->id) }}" class="inline-flex w-20 justify-center rounded-full bg-indigo-300 hover:bg-indigo-400 hover:transition-colors px-1.5 py-0.5 text-xs text-white sm:block">Detalhes</a>
                              </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('comments.index', $user->id) }}" class="inline-flex w-20 justify-center rounded-full bg-orange-300 hover:bg-orange-400 hover:transition-colors px-1.5 py-0.5 text-xs text-white sm:block">Anotações (0)</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

</div>


@endsection
