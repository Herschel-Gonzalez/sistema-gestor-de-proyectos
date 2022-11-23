<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function users(){
        $users = User::latest()->paginate();
        return view('users',['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'paterno' => ['required', 'string', 'max:255'],
            'materno' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tipo' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => $request->tipo,
        ]);

        event(new Registered($user));

        //Auth::login($user);

        return redirect(RouteServiceProvider::USUARIOS);
    }

    public function create(){
        return view('create');
    }

    public function edit($userid){
        $user = User::find($userid);
       return view('edit',['user' => $user]);
    }

    public function update(Request $request){
        $user= User::find($request->user_id);
        $user->name = $request->name;
        $user->paterno = $request->paterno;
        $user->materno = $request->materno;
        $user->email = $request->email;
        $user->password = $user->password;
        $user->tipo = $request->tipo;
        $user->save();
        return redirect('users');
    }

    public function delete($userid){
        $user = User::find($userid);
        $user->delete();
       return redirect('users');
    }
    
}
