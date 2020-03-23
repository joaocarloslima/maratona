@extends('layouts.app')

@section('title', 'Lista de equipes')

@section('menu')
    @component('menu', ['active' => 'teams'])
        
    @endcomponent
@endsection

@section('main')
    <div class="box">
        <h1>Equipes</h1>    
        <div class="table-action">
            <a href="{{ route('team-create') }}" class="button primary">Cadastrar Equipe</a>
        </div>
        <table>
        <thead>
            <tr>
                <th>Equipe</th>
                <th>participantes</th>
                <th>pontuação</th>
                <th>ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
            <tr>
                <td>{{$team->name}}</td>
                <td>oi</td>
                <td></td>
                <td>
                    <form method="POST" action="/admin/teams/{{ $team->id }}" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button class="small danger"><i class="material-icons">delete</i></button>
                    </form>
                    <button class="small"><i class="material-icons">add</i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection