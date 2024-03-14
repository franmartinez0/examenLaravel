<x-app-layout>

    <a href="/proyecto/create" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Añadir </a>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        descripcion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        id creador
                    </th>
                    <th scope="col" class="px-6 py-3">
                        id participante
                    </th>
                    <th scope="col" class="px-6 py-3">
                        acciones
                    </th>
                    <th scope="col" class="px-6 py-3">
                        mas participantes
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $proyecto->nombre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $proyecto->descripcion }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $proyecto->creador_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $proyecto->participante_id }}
                        </td>

                        <<td class="px-6 py-4 text-center">
                            <a href="/proyecto/{{ $proyecto->id }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver </a>

                            <a href="/proyecto/delete/{{ $proyecto->id }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Borrar
                            </a>
                            <a href="{{ $proyecto->id }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar
                            </a>
                            </td>
                            <td>
                                <a href="/proyecto/createParticipante/"{{ $proyecto->id }}
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Añadir
                                </a>
                            </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $proyectos->links() }}
    </div>
</x-app-layout>
