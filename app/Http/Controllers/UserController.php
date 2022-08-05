<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function index(Request $request)
    {
        $users = $this->model
            ->getUsers(
                search: $request->search ?? ''
            );

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if(!$user = User::find($id))

            return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->route('users.index');

    }

    public function edit($id)
    {
        if(!$user = User::find($id))

            return redirect()->route('users.index');

        return view('users.edit', compact('user'));

    }

    public function update(StoreUpdateFormRequest $request, $id)
    {
        if(!$user = User::find($id))

            return redirect()->route('users.index');

        $data = $request->all('name', 'email');

        if($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return redirect()->route('users.index');

    }

    public function destroy($id)
    {
        if(!$user = User::find($id))
            return redirect()->route('users.index');

        $user->delete();

        return redirect()->route('users.index');
    }
}
