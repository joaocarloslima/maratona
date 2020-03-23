@extends('layouts.app')

@section('title', 'Criar Equipe')

@section('menu')
    @component('menu', ['active' => 'events'])
        
    @endcomponent
@endsection

@section('main')
<main class="box">
    <h1>Criar evento</h1>
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
            <label for="name">Nome do Evento</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="start_date">Data de Início</label>
            <input type="date" name="start_date" id="start_date">
        </div>
        <div class="input-group">
            <label for="end_date">Data de Fim</label>
            <input type="date" name="end_date" id="end_date">
        </div>
        <a class="button" href="/admin/events">cancelar</a>
        <button type="submit" class="primary">Criar</button>
    </form>
</main>
    
@endsection
    