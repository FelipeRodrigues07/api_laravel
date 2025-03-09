<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<script>
    function toggleDropdown() {
        let dropdown = document.getElementById('dropdownCategorias');
        dropdown.classList.toggle('hidden');
    }
</script>
<body>  
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center px-8">
            <a href="#" class="text-xl font-bold">Curso Laravel</a>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li class="relative">
                    <button onclick="toggleDropdown()" class="hover:underline flex items-center">
                        Categorias <span class="material-icons ml-1 text-sm">expand_more</span>
                    </button>
                    <ul id="dropdownCategorias" class="absolute left-0 mt-2 w-48 bg-white text-black shadow-lg rounded-md hidden">
                        @foreach ($categoriasMenu as $categoriaM)
                        <li class="p-2 hover:bg-gray-200"><a href="{{ route('site.categoria',  $categoriaM->id )}}">{{ $categoriaM->nome}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#" class="hover:underline">Carrinho</a></li>
            </ul>
        </div>
    </nav>
@yield('conteudo')         
</body>
</html>