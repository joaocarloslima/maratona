@extends('layouts.app')

@section('title', "Resolver Problema")

@section('menu')
        <h2>Envios Realizados</h2>
        <ul class="runs">
            <li class="runs-item">
                <i class="material-icons red">report</i>
                <div class="runs-data">
                    <span>+10 minutos</span>
                    <h3>Erro de saída</h3>
                </div>
            </li>
            <li class="runs-item">
                <i class="material-icons red">bug_report</i>
                <div class="runs-data">
                    <span>+10 minutos</span>
                    <h3>Erro em tempo de execução</h3>
                </div>
            </li>
            <li class="runs-item">
                <i class="material-icons red">watch_later</i>
                <div class="runs-data">
                    <span>+10 minutos</span>
                    <h3>Erro de Timeout</h3>
                </div>
            </li>
            <li class="runs-item">
                <i class="material-icons red">build</i>
                <div class="runs-data">
                    <span>+10 minutos</span>
                    <h3>Erro de compilação</h3>
                </div>
            </li>
            <li class="runs-item">
                <i class="material-icons green">check_circle</i>
                <div class="runs-data">
                    <span>sucesso</span>
                    <h3>Resposta correta</h3>
                </div>
            </li>
        </ul>
@endsection

@section('main')
    <div class="box">
        <div class="problem-detail">
            <i class="material-icons balloon {{$problem->color}}">room</i>
            <h1>{{$problem->name}}</h1>
            @php echo $problem->text; @endphp
            <form method="post" enctype="multipart/form-data">
                <div>
                    <input type="file" id="file" name="file" multiple>
                </div>
                <div>
                    <a class="button" href="/problems">cancelar</a>
                    <button class="primary">enviar</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection



