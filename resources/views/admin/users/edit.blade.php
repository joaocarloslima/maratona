@extends('layouts.app')

@section('title', 'Editar usuário')

@section('menu')
    @component('menu', ['active' => 'users'])
        
    @endcomponent
@endsection

@section('main')
<main class="box">
    <h1>Editar usuário</h1>
    @if ($errors->any())
        <div class="alert danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('user-update', $user->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="input-group">
            <label for="name">Nome completo</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div class="input-group">
            <label for="email">E-mail</label>
            <input type="mail" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div class="input-group">
            <label for="team_id">Selecione a equipe</label>
            <select name="team_id" id="team_id">
                @foreach ($teams as $team)
            <option {{ ($user->team_id===$team->id)?'selected':''}} value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>        
        <a class="button" href="/admin/users">cancelar</a>
        <button type="submit" class="primary">Salvar</button>
    </form>
</main>
    
@endsection
    