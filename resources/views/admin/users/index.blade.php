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
                <th>equipe</th>
                <th>ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->team->name }}</td>
                <td class="action">
                    <a href="{{ route('reset-pass', $user->id) }}" class="button small" title="editar"><i class="material-icons">edit</i></a>
                    <form method="POST" action="/admin/users/{{ $user->id }}" class="inline-form">
                        @csrf
                        <button class="small" title="resetar para senha padrão"><i class="material-icons">vpn_key</i></button>
                    </form>
                    <form method="POST" action="/admin/users/{{ $user->id }}" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button class="small danger" title="excluir"><i class="material-icons">delete</i></button>
                    </form>
                </td>
            </tr>    
            
            @endforeach

        </tbody>
    </table>
    {{ $users->links() }}

</div>
@endsection