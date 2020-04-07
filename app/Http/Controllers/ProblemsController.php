<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormProblemRequest;
use App\Problem;
use App\Event;
use Illuminate\Http\Request;

class ProblemsController extends Controller
{
    public function index(Request $request)
    {
        $problems = Problem::all();
        $message = $request->session()->get('message');
        return view('admin.problems.index', ['problems' => $problems, 'message'=> $message]);
    }

    public function create(){
        return view('admin.problems.create', ['events' => Event::all()]);
    }

    public function store(FormProblemRequest $request){
        $problem = Problem::create( $request->all());
        $request->session()->flash("message", "Problema criado com id $problem->id");
        return redirect("/admin/problems");
    }

    public function destroy(Request $request){
        Problem::destroy($request->id);
        $request->session()->flash("message", "Problema apagado com sucesso");
        return redirect("/admin/problems");
    }

    public function edit(Int $id){
        $problem = Problem::find($id);
        return view('admin.problems.edit', ['problem' => $problem, 'events' => Event::all()] );
    }

    public function update(Request $request){
        $problem = Problem::find($request->id);
        $problem->update($request->all());
        $request->session()->flash("message", "Problema alterado com sucesso.");
        return redirect("/admin/problems");
    }

    public function list()
    {
        $problems = Problem::all();
        return view('user.problems', ['problems' => $problems, 'resolvido' => false]);
    }

    public function show(Request $request){
        $problems = Problem::find($request->id);
        return view('problem.problem', ['problems' => $problems]);
    }


}