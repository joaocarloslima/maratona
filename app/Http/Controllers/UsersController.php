<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormUserRequest;
use App\User;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate(5);
        $message = $request->session()->get('message');
        return view('admin.users.index', ['users' => $users, 'message'=> $message]);
    }

    public function create(){
        return view('admin.users.create', ['teams' => Team::all()]);
    }

    public function store(FormUserRequest $request){
        $user = User::create( $request->all());
        $user->fill([
            'password' => Hash::make($request->password)
        ])->save();
        $request->session()->flash("message", "Usuário $user->name criado com id $user->id");
        return redirect("/admin/users");
    }

    public function destroy(Request $request){
        User::destroy($request->id);
        $request->session()->flash("message", "Usuário apagado com sucesso");
        return redirect("/admin/users");
    }

    public function edit(Int $id){
        $user = User::find($id);
        return view('admin.users.edit', ['user' => $user, 'teams' => Team::all()]);
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->update($request->all());
        $request->session()->flash("message", "Dados alterados com sucesso");
        return redirect("/admin/users");
    }

    public function resetPass(Request $request){
        $user = User::find($request->id);
        $user->password = Hash::make("Etecia@238");
        $user->save();
        $request->session()->flash("message", "Senha do usuário $user->name resetada para Etecia@238");
        return redirect("/admin/users");
    }

}