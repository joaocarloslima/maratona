<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormEventRequest;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();
        $message = $request->session()->get('message');
        return view('admin.events.index', ['events' => $events, 'message'=> $message]);
    }

    public function create(){
        return view('admin.events.create');
    }

    public function store(FormEventRequest $request){
        $event = Event::create( $request->all());
        $request->session()->flash("message", "Evento $event->name criado com id $event->id");
        return redirect("/admin/events");
    }

    public function destroy(Request $request){
        Event::destroy($request->id);
        $request->session()->flash("message", "Evento apagado com sucesso");
        return redirect("/admin/events");
    }

}