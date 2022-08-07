@csrf
    <input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
    <input type="email" name="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Editar Usuário
    </button>
</form>
