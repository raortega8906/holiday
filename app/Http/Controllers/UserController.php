<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.user.index', ['users' => $users]);
    }

    public function create(Request $request)
    {
        $dataValidated = $request->validate([
            'name' => 'required|min:5|max:500',
            'email' => 'required|min:5|max:500',
            'password' => 'required|unique|min:5|max:500',
            'rol_id' => 'required|min:5|max:500'
        ]);
        dd(User::create($dataValidated));
        return back()->with('status', 'Usuario creado con éxito');
    }

    public function show(User $user)
    {
        return view('admin.user.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $dataValidated = $request->validate([
            'rol_id' => 'required|min:5|max:50'
        ]);
        $user->update($dataValidated);
        return back()->with('status', 'Solicitud actualizada con éxito');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('status', 'Usuario eliminado con éxito');
    }
}
