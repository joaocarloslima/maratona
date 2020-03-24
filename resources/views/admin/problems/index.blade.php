@extends('layouts.app')

@section('title', 'Lista de Problemas')

@section('menu')
    @component('menu', ['active' => 'problems'])
        
    @endcomponent
@endsection

@section('main')
    <div class="box">
        <h1>Problemas</h1>

        @isset($message)
            <div class="alert success">{{ $message }}</div>

        @endisset
            
        <div class="table-action">
            <a href="{{ route('problems-create') }}" class="button primary">Criar um problema</a>
        </div>
        <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>descrição</th>
                <th>evento</th>
                <th>cor</th>
                <th>ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($problems as $problem)
                
            <tr>
                <td>{{ $problem->id }}</td>
                <td>{{ $problem->name }}</td>
                <td>{{ $problem->description }}</td>
                <td>{{ $problem->event->name }}</td>
                <td><i class="material-icons balloon {{ $problem->color }}">room</i></td>
                <td class="action">
                <a href={{ route('problem-edit', $problem->id) }} class="button small"><i class="material-icons">edit</i></a>
                    <form method="POST" action="/admin/problems/{{ $problem->id }}" class="inline-form">
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