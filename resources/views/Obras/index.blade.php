@extends('layouts.app')

@section('contenido')
    @if ($datos == NULL)
        <p class="text-center text-gray-600 mt-8">No hay datos disponibles</p>
    @else
        <h1 class="text-3xl font-bold text-center my-8">Listado de Obras</h1>

        <div class="overflow-x-auto mx-4">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3 px-4">Título</th>
                        <th class="py-3 px-4">Descripción</th>
                        <th class="py-3 px-4">Portada</th>
                        <th class="py-3 px-4">Autor</th>
                        <th class="py-3 px-4">Creado en</th>
                        <th class="py-3 px-4">Actualizado en</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datos as $datos)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-2 px-4 text-center">{{ $datos['id'] }}</td>
                        <td class="py-2 px-4">{{ $datos['title'] }}</td>
                        <td class="py-2 px-4">{{ $datos['description'] }}</td>
                        <td class="py-2 px-4 text-center">
                            <iframe src="{{ $datos['url_image'] }}" height="200" width="150" frameborder="0" scrolling="no"></iframe>
                        </td>
                        <td class="py-2 px-4">{{ $datos['autor'] }}</td>
                        <td class="py-2 px-4 text-center">{{ $datos['created_at'] }}</td>
                        <td class="py-2 px-4 text-center">{{ $datos['updated_at'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
