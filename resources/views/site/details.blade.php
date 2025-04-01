@extends('site.layout')
@section('title', 'Detalhes')

@section('conteudo')
<div class="container mx-auto p-4">
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-64 object-cover" src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
        <div class="p-4">
            <h2 class="text-xl font-bold">{{ $produto->nome }}</h2>
            <h2 class="text-xl font-bold"> R$: {{  number_format($produto->preço, 2, ',', '.') }}</h2>
            <p class="text-gray-700 mt-2">{{ $produto->descricao }}</p>
            <p class="text-gray-700 mt-2">Postado Por: {{ $produto->user->firstName}} <br>
            Categoria: {{ $produto->categoria->nome }}
            </p>
            <form action="{{ route('site.addcarrinho') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $produto->id }}">
                <input type="hidden" name="nome" value="{{ $produto->nome }}">
                <input type="hidden" name="preco" value="{{ $produto->preço }}">
                <input type="number" name="quantity" value="1">
                <input type="hidden" name="img" value="{{ $produto->imagem }}">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">Comprar</button>
            </form>
        </div>
    </div>
</div>
@endsection