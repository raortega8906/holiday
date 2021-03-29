<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

//    public function create(Request $request)
//    {
//        $dataValidated = $request->validate([
//            'name' => 'required|min:5|max:500',
//            'email' => 'required|min:5|max:500',
//            'password' => 'required|min:5|max:500',
//            'rol_id' => 'required|min:5|max:500'
//        ]);
//        User::create($dataValidated);
//        return back()->with('status', 'Usuario creado con éxito');
//    }

    public function create(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'rol_id' => $request['rol_id']
        ]);
        return back()->with('status', 'Usuario creado con éxito');
//        return view('admin.user.create', ['user' => new User()]);
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
        $user->update([
            'rol_id' => $request['rol_id']
        ]);
        return back()->with('status', 'Usuario actualizado con éxito');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('status', 'Usuario eliminado con éxito');
    }
}
