<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('admin.user.index', compact('users'));
    }

    public function create(CreateUserRequest $request)
    {
        $userValidated = $request->validated();
        $userValidated['password'] = bcrypt($userValidated['password']);
        $email = $userValidated['email'];
        $users = User::all();

        foreach ($users as $user){
            if($user->email == $email){
                return back()->with('status-error', 'Ya el email está  registrado');
            }
        }

        User::create($userValidated);

        return back()->with('status', 'Usuario creado con éxito');
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $userValidated = $request->validated();
        $user->update($userValidated);

        return back()->with('status', 'Usuario actualizado con éxito');
    }

    public function destroy(User $user)
    {
        $user->delete();
        
        return back()->with('status', 'Usuario eliminado con éxito');
    }
}
