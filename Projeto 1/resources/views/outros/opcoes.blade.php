@extends('layouts.principal')

@section('titulo', 'Opções')

@section('conteudo')

    <div class="options">
        <ul>
            <li><a href="{{ route('opcoes', 1) }}" class="warning {{ $opcao == 1 ? 'selected' : "" }}">Warning</a></li>
            <li><a href="{{ route('opcoes', 2) }}" class="info {{ $opcao == 2 ? 'selected' : "" }}">Info</a></li>
            <li><a href="{{ route('opcoes', 3) }}" class="success {{ $opcao == 3 ? 'selected' : "" }}">Success</a></li>
            <li><a href="{{ route('opcoes', 4) }}" class="error {{ $opcao == 4 ? 'selected' : "" }}">Error</a></li>
        </ul>
    </div>
    {{ request()->routeIs('clientes.*') ? 'active' : '' }}
    @if (isset($opcao))
        @switch($opcao)
            @case(1)
                @alerta(['titulo' => 'Erro fatal', 'tipo' => 'warning'])  
                    <p>
                        <strong>Warning</strong>
                    </p>
                    <p>
                        Ocorreu um erro inesperado
                    </p>
                @endalerta
                @break
            @case(2)
                @alerta(['titulo' => 'Erro fatal', 'tipo' => 'info'])  
                    <p>
                        <strong>Info</strong>
                    </p>
                    <p>
                        Ocorreu um erro inesperado
                    </p>
                @endalerta                
                @break
            @case(3)
                @alerta(['titulo' => 'Erro fatal', 'tipo' => 'success'])  
                    <p>
                        <strong>Sucess</strong>
                    </p>
                    <p>
                        Ocorreu um erro inesperado
                    </p>
                @endalerta
                @break
            @case(4)
                @alerta(['titulo' => 'Erro fatal', 'tipo' => 'error'])  
                    <p>
                        <strong>Error</strong>
                    </p>
                    <p>
                        Ocorreu um erro inesperado
                    </p>
                @endalerta
                @break
            @default
                
        @endswitch
    @endif

@endsection