@extends('layouts.app')

@section('title', 'Criar Equipe')

@section('menu')
    @component('menu', ['active' => 'teams'])
        
    @endcomponent
@endsection

@section('main')
<main class="box">
    <h1>Criar equipe</h1>
    @if (isset($tem))
        <div class="alert danger">
        <ul>Equipe ja existente!</ul>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST">
        @csrf
        <div class="input-group">
            <label for="name">Nome da Equipe</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="select-group">
            <label for="event_id">Competição</label>
            <select name="event_id" id="event_id">
                <option value=1 selected>Etecia</option>
                <option value=2>Etec Guaracy Silveira</option>
                <option value=3>ETESP</option>
            </select>
        </div>
        <a class="button" href="/admin/teams">cancelar</a>
        <button type="submit" class="primary">Criar</button>
    </form>
</main>
    
@endsection
    