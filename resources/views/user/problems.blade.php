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
                    <i class="material-icons balloon blue">room</i>
                    <i class="material-icons balloon red">room</i>
                    <i class="material-icons balloon yellow">room</i>
                    <i class="material-icons balloon green">room</i>
                    <i class="material-icons balloon purple">room</i>
                </div>
            </li>
            <li>
                <div class="ranking-team">
                    <img src="" alt="" class="team-foto">
                    <h3>Equipe Beta</h3>
                    <span>32 minutos</span>
                </div>
                <div class="ranking-ballons">
                    <i class="material-icons balloon purple">room</i>
                    <i class="material-icons balloon red">room</i>
                </div>
            </li>
        </ul>
@endsection

@section('main')
            <ul>
            @foreach ($problems as $problem)
                <li class="box">
                    <div class="problem-info">
                        <h1>{{$problem->name}}</h1>
                        <p>{{$problem->description}}</p>
                    </div>
                    <div class="problem-action">
                        @if ($resolvido)
                            <i class="material-icons ballon blue">where_to_vote</i>
                            <button class="desabled">Resolvido</button>
                        @else
                            <i class="material-icons balloon red off">room</i>
                            @php 
                                $p = $problem->id;
                                echo "<a href='/problems/$p'><button class='primary'>resolver</button></a>";
                            @endphp
                        @endif
                <li>
            @endforeach
@endsection
