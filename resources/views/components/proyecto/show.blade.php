<x-app-layout>



    <x-slot name="titulo">
        Detalle de proyecto
    </x-slot>
    <x-slot name="nuevo">

    </x-slot>

    <a
        class="block mt-4 mx-auto w-full max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $proyecto->id }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">ID: {{ $proyecto->id }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Nombre: {{ $proyecto->nombre }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Descripcion: {{ $proyecto->descripcion }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">id de creador: {{ $proyecto->creador_id }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Id de participante: {{ $proyecto->participante_id }}</p>

    </a>



</x-app-layout>
