<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Problem;
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
        return view('admin.problems.create');
    }

    public function store(Request $request){
        $problem = Problem::create( $request->all());
        $request->session()->flash("message", "Problema criado com id $problem->id");
        return redirect("/admin/problems");
    }

    public function destroy(Request $request){
        Problem::destroy($request->id);
        $request->session()->flash("message", "Problema apagado com sucesso");
        return redirect("/admin/problems");
    }

}