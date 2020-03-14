@extends('layouts.app')

@section('title', 'Criar usuário')

@section('menu')
    @component('menu', ['active' => 'users'])
        
    @endcomponent
@endsection

@section('main')
<main class="box">
    <h1>Criar usuário</h1>
    <form method="POST">
        @csrf
        <div class="input-group">
            <label for="name">Nome completo</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="email">E-mail</label>
            <input type="mail" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
        </div>
        <button>cancelar</button>
        <button type="submit" class="primary">Criar</button>
    </form>
</main>
    
@endsection
    