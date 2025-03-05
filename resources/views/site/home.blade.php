@extends('site.layout')
@section('title', 'Essa pagina é a HOME')

@section('conteudo')
   @include('includes.mensagem', ['titulo' => 'Mensagem de sucesso'])
   
   @component('components.sidebar')
       @slot('paragrafo')
        Texto qualquer
       @endslot
   @endcomponent
@endsection