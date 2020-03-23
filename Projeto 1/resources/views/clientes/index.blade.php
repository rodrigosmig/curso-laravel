@extends('layouts.principal')

@section('titulo', 'Clientes')

@section('conteudo')
    <h3>{{ $titulo }}</h3>
    <a href="{{ route('clientes.create') }}">Novo Cliente</a>
    @if(!empty($clientes))
        <ul>
            @foreach ($clientes as $c)
                <li>{{ $c['nome'] }} | 
                    <a href="{{ route('clientes.edit', $c['id']) }}">Edit</a>
                    <a href="{{ route('clientes.show', $c['id']) }}">Info</a>
                    <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Apagar">
                    </form>
                </li>
                
            @endforeach
        </ul>
    @endif

    @foreach ($clientes as $c)
        <p>
            {{ $c['nome'] }} |
            @if ($loop->first)
                (primeiro) |                
            @endif
            
            @if ($loop->last) |
                (último) |                
            @endif
            ({{ $loop->index }} - {{ $loop->iteration }} / {{ $loop->count }})
        </p>       
    @endforeach

    @empty($clientes)
    <h4>Não existem usuários cadastrados</h4>    
    @endempty
@endsection