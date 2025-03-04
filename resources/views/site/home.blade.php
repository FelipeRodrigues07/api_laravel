@extends('site.layout')
@section('title', 'Essa pagina é a HOME')

@section('conteudo')
 
{{-- isset($nome) ? 'existe' : 'não existe'--}}
{{-- {{ $teste ?? 'padrão'}} --}}

{{-- Estrutura de Controle--}}

{{-- @if ($nome == 'rodrigo')
    true
@else 
  false     
@endif --}}

{{-- @switch($idade)
    @case(28)
        idade esta ok
        @break
    @case(29)
        idade esta errada
        @break
    @default
     default
@endswitch --}}

{{-- @empty($nome)
   está vazia
@endempty --}}

{{-- @auth
    está autenticado
@endauth --}}

@guest
    não está autenticado
@endguest
    
@endsection