@extends('site.layout')
@section('title', 'Detalhes')

@section('conteudo')
<div class="container mx-auto p-4">
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-64 object-cover" src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
        <div class="p-4">
            <h2 class="text-xl font-bold">{{ $produto->nome }}</h2>
            <p class="text-gray-700 mt-2">{{ $produto->descricao }}</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">Comprar</button>
        </div>
    </div>
</div>
@endsection