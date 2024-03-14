<x-app-layout>



    <x-slot name="titulo">
        Añadir proyecto nuevo
    </x-slot>
    <x-slot name="nuevo">
    </x-slot>

    <form class="max-w-sm mx-auto" method="POST" action="{{ route('proyectos.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nombre</label>
            <input type="text" name="nombre"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="nombre" required />
        </div>
        <div class="mb-5">
            <label for="descripcion"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">descripcion</label>
            <input type="text" name="descripcion"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="descripcion" required />
        </div>

        <div class="mb-5">
            <label for="participante_id"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">participante_id</label>
            <input type="text" name="participante_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="participante_id" required />
        </div>



        <input type="hidden" value="{{ $id = auth()->id() }}" name="creador_id" />





        <button type="submit"
            class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">enviar
        </button>
    </form>


</x-app-layout>
