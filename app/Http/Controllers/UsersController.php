<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormUserRequest;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $message = $request->session()->get('message');
        return view('admin.users.index', ['users' => $users, 'message'=> $message]);
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(FormUserRequest $request){
        $users = User::all();
        foreach ($users as $user) {
            if ($user->email == $request->email) {
                return view('admin.users.create', ['tem' => true]);
            } 
        }
        $user = User::create( $request->all());
        $request->session()->flash("message", "Usuário $user->name criado com id $user->id");
        return redirect("/admin/users");
    }

    public function destroy(Request $request){
        User::destroy($request->id);
        $request->session()->flash("message", "Usuário apagado com sucesso");
        return redirect("/admin/users");
    }

}