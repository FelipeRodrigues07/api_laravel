@extends('site.layout')
@section('title', 'Carrinho')

@section('conteudo')
@if(session('success'))
    <div id="success-message" class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg text-sm z-50 transition-opacity duration-500">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            const message = document.getElementById('success-message');
            if (message) {
                message.style.opacity = '0';
                setTimeout(() => message.remove(), 500);
            }
        }, 3000); 
    </script>
@endif
<div class="container mx-auto mt-8">
    <h3 class="text-xl font-bold mb-4">Seu carrinho possui: {{$itens->count()}} produtos.</h3>

    <table class="min-w-full bg-white shadow-lg rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4">Imagem</th>
                <th class="py-2 px-4">Nome</th>
                <th class="py-2 px-4">Preço</th>
                <th class="py-2 px-4">Qantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($itens as $item)
            <tr>
                <td class="py-2 px-4 text-center">
                    @if(isset($item->options->image))
                    <img class="w-16 h-16 object-cover rounded" src="{{ $item->options->image }}" alt="{{ $item->name }}">
                @else
                    <span>Sem imagem</span>
                @endif
                </td>
                <td class="py-2 px-4">{{ $item->name }}</td>
                <td class="py-2 px-4 text-center">R$ {{ number_format($item->price, 2, ',', '.') }}</td>
                <td class="py-2 px-4"><input type="number" name="quantity" value="{{ $item->qty }}"></td>
                {{-- <td class="py-2 px-4 text-center">R$ {{ number_format($produto->price * $produto->qty, 2, ',', '.') }}</td> --}}
                <td class="py-2 px-4 text-center">
                        <button type="submit" class="text-blue-500">
                            <i class="material-icons">refresh</i> 
                        </button>  
                </td>
                <td class="py-2 px-4 text-center">
                        <button type="submit" class="text-red-500">
                        <i class="material-icons">delete</i> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="flex justify-between mt-6">
        <div class="font-bold text-lg">
            Total: R$ {{ number_format(Cart::total(), 2, ',', '.') }}
        </div>
        <button class="bg-red-500 text-white px-4 py-2 rounded-lg">Limpar carrinho</button>
        <button class="bg-green-500 text-white px-4 py-2 rounded-lg">Finalizar Compra</button>
    </div>
</div>
@endsection
