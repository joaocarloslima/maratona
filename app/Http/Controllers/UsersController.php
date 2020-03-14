<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        $user = User::create( $request->all());
        echo $user->id;
    }

}