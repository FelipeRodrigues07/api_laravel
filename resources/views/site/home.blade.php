@extends('site.layout')
@section('title', 'Essa pagina é a HOME')

@section('conteudo')
   {{-- Isso é um comentario --}}

{{-- isset($nome) ? 'existe' : 'não existe'--}}

{{ $teste ?? 'padrão'}}
@endsection