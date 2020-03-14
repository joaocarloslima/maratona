@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('menu')
    @component('menu', ['active' => 'users'])
        
    @endcomponent
@endsection

@section('main')
    <div class="box">
        <h1>Usuários</h1>

        @isset($message)
            <div class="alert success">{{ $message }}</div>
        @endisset
            
        <div class="table-action">
            <a href="{{ route('user-create') }}" class="button primary">Cadastrar Usuário</a>
        </div>
        <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>login</th>
                <th>ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form method="POST" action="/admin/users/{{ $user->id }}" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button class="small danger"><i class="material-icons">delete</i></button>
                    </form>
                    <button class="small"><i class="material-icons">people_alt</i></button>
                </td>
            </tr>    
            
            @endforeach
            
        </tbody>
    </table>

</div>
@endsection