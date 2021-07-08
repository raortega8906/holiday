<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create(Request $request)
    {
        $users = User::all();
        $email = $request->input('email');
        foreach ($users as $u){
            if($u->email == $email){
                return back()->with('status-error', 'Ya el email está  registrado');
            }
        }
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'is_admin' => $request['is_admin']
        ]);
        return back()->with('status', 'Usuario creado con éxito');
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'is_admin' => $request['is_admin']
        ]);
        return back()->with('status', 'Usuario actualizado con éxito');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('status', 'Usuario eliminado con éxito');
    }
}
