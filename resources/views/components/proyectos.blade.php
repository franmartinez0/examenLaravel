<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (isset($proyectoss))
                    @foreach ($proyectos as $proyecto)
                        <x-table.td>
                            <x-table.th>
                                Nombre
                            </x-table.th>
                            <x-table.th>
                                Descripcion
                            </x-table.th>
                            <x-table.th>
                                ID de creador
                            </x-table.th>
                            <x-table.th>
                                ID de participante
                            </x-table.th>
                            <x-table.th>
                                Acciones
                            </x-table.th>
                            <x-table.td>
                                {{ $proyecto->nombre }}
                            </x-table.td>
                            <x-table.td>
                                {{ $proyecto->descripcion }}
                            </x-table.td>
                            <x-table.td>
                                {{ $proyecto->user_id }}
                            </x-table.td>
                            <x-table.td>
                                {{ $proyecto->participante_id }}
                            </x-table.td>
                            <x-table.td>
                                <td class="px-6 py-4 text-center">
                                    <a href="/proyecto/{{ $proyecto }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver
                                    </a>

                                    <a href="/productos/delete/{{ $producto->id }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Borrar
                                    </a>
                                    <a href="/productos/{{ $producto->id }}/edit"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar
                                    </a>
                                </td>
                            </x-table.td>
                            </x-table.table>
                    @endforeach
                @else
                    <p class="text-white">No se encontraron resultados.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
