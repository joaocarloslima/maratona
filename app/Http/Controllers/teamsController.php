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
        $dEvent_id = $request->event_id;
        $message = $request->session()->get('message');
        return view('admin.users.teams', ['teams' => $teams, 'message'=> $message, 'dEvent_id' => $dEvent_id]);
    }
    public function create(){
        return view('admin.users.teamsCreate');
    }
    public function store(FormTeamRequest $request){
        $teams = Team::all();
        foreach ($teams as $team) {
            if ($team->name == $request->name) {
                return view('admin.users.teamsCreate', ['tem' => true]); //tem verificação
            } 
        }
        $equipe = Team::create( $request->all());
        $request->session()->flash("message", "Equipe $equipe->name criado com id $equipe->id");
        return redirect("/admin/teams/".$equipe->event_id);
    }
    public function destroy(Request $request){
        Team::destroy($request->id);
        $request->session()->flash("message", "Usuário apagado com sucesso");
        return redirect("/admin/teams/".$request->event_id);
    }
}