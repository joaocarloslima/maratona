@extends('layouts.app')

@section('title', 'Lista de Eventos')

@section('menu')
    @component('menu', ['active' => 'events'])
        
    @endcomponent
@endsection

@section('main')
    <div class="box">
        <h1>Eventos</h1>    
        @isset($message)
            <div class="alert success">{{ $message }}</div>
        @endisset
        <div class="table-action">
            <a href="{{ route('event-create') }}" class="button primary">Cadastrar Evento</a>
        </div>
        <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome do Eventos</th>
                <th>Início</th>
                <th>Fim</th>
                <th>ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->name}}</td>
                <td>{{$event->start_date}}</td>
                <td>{{$event->end_date}}</td>
                <td>
                    <form method="POST" action="/admin/events/{{ $event->id }}" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button class="small danger"><i class="material-icons">delete</i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection