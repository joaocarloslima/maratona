@extends('layouts.app')

@section('title', 'Resolver Problema')


@section('content')

        <main>
            <ul>
                <li class="box">
                    <div class="problem-info">
                        <h1>Problema 01</h1>
                        <p>Descrição do problema 01</p>
                        <span>resolvido</span>
                    </div>
                    <div class="problem-action">
                        <i class="ballon ballon-blue "></i>
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
                        <i class="ballon ballon-red off"></i>
                        <button class="primary">resolver</button>
                    </div>
                </li>
            </ul>
        </main>

        <aside class="box">
            <h2>Ranking</h2>
            <ul class="ranking">
            <li>
                    <div class="ranking-team">
                        <h3>Equipe Alpha</h3>
                        <span>25 minutos</span>
                    </div>
                    <div class="ranking-ballons">
                        <i class="ballon ballon-blue "></i>
                        <i class="ballon ballon-red "></i>
                        <i class="ballon ballon-purple "></i>
                    </div>
                </li>
                <li>
                    <div class="ranking-team">
                        <img src="" alt="" class="team-foto">
                        <h3>Equipe Beta</h3>
                        <span>32 minutos</span>
                    </div>
                    <div class="ranking-ballons">
                        <i class="ballon ballon-green"></i>
                        <i class="ballon ballon-yellow"></i>
                    </div>
                </li>
            </ul>
        </aside>
@endsection
