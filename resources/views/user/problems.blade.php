@extends('layouts.app')

@section('title', 'Lista de Problemas')

@section('menu')
        <h2>Ranking</h2>
        <ul class="ranking">
        <li>
                <div class="ranking-team">
                    <h3>Equipe Alpha</h3>
                    <span>25 minutos</span>
                </div>
                <div class="ranking-ballons">
                    <i class="material-icons balloon blue">nature</i>
                    <i class="material-icons balloon red">nature</i>
                    <i class="material-icons balloon yellow">nature</i>
                    <i class="material-icons balloon green">nature</i>
                    <i class="material-icons balloon purple">nature</i>
                </div>
            </li>
            <li>
                <div class="ranking-team">
                    <img src="" alt="" class="team-foto">
                    <h3>Equipe Beta</h3>
                    <span>32 minutos</span>
                </div>
                <div class="ranking-ballons">
                    <i class="material-icons balloon purple">nature</i>
                    <i class="material-icons balloon red">nature</i>
                </div>
            </li>
        </ul>
@endsection

@section('main')
            <ul>
                <li class="box">
                    <div class="problem-info">
                        <h1>Problema 01</h1>
                        <p>Descrição do problema 01</p>
                        <span>resolvido</span>
                    </div>
                    <div class="problem-action">
                        <i class="material-icons balloon blue">nature</i>
                        <button class="desabled">resolvido</button>
                    </div>
                </li>
                <li class="box">
                    <div class="problem-info">
                        <h1>Problema 01</h1>
                        <p>Descrição do problema 01</p>
                        <span>resolvido</span>
                    </div>
                    <div class="problem-action">
                        <i class="material-icons balloon red off">nature</i>
                        <button class="primary">resolver</button>
                    </div>
                </li>
            </ul>

@endsection
