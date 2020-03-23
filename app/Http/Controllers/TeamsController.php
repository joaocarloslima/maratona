<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormTeamRequest;
use App\Team;
use Illuminate\Http\Request;

class teamsController extends Controller
{
    public function index(Request $request)
    {   
        $teams = Team::all();
        $message = $request->session()->get('message');
        return view('admin.teams.index', ['teams' => $teams, 'message'=> $message]);
    }

    public function create(){
        return view('admin.teams.create');
    }

    public function store(FormTeamRequest $request){
        $team = Team::create( $request->all());
        $request->session()->flash("message", "Equipe $team->name criado com id $team->id");
        return redirect("/admin/teams");
    }

    public function destroy(Request $request){
        Team::destroy($request->id);
        $request->session()->flash("message", "Usuário apagado com sucesso");
        return redirect("/admin/teams/".$request->event_id);
    }
}