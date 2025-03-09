@extends('site.layout')
@section('title', 'Essa página é a Categoria')

@section('conteudo')
<div class="container mx-auto">
    <h3>Categoria:</h3>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-8   justify-items-center ">
    @foreach ($produtos as $produto)
    <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden">
      <div class="relative">
          <img class="w-full h-48 object-cover" src="{{ $produto->imagem }}" alt="Imagem do Produto">
          <div class="absolute bottom-4 left-4 text-black text-lg px-4">
            {{ $produto->nome }}
        </div>
        <a href="{{ route('site.details', $produto->slug) }}" 
          class="absolute right-4 bottom-4 bg-red-500 text-white p-3 rounded-full shadow-lg hover:bg-red-600 flex items-center justify-center">
           <i class="material-icons">visibility</i>
       </a>
      </div>
      <div class="p-4">
          <p class="text-gray-700">{{ $produto->descricao }}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>
<div class="flex justify-center mt-8">
    {{$produtos->links() }}
</div>
@endsection
