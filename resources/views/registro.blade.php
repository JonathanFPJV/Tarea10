<x-app-layout>
    <h1 class="text-xl font-semibold leading-tight">Registrar Notas</h1>

    <form method="POST" action="{{ route('estudiantes.registrar') }}">
        @csrf
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">Apellido</th>
                    <th class="py-2">Nombre</th>
                    <th class="py-2">Nota</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estudiantes as $estudiante)
                    <tr>
                        <td class="border px-4 py-2">{{ $estudiante->apellido }}</td>
                        <td class="border px-4 py-2">{{ $estudiante->nombre }}</td>
                        <td class="border px-4 py-2">
                            <input type="number" name="notas[{{ $estudiante->id }}]" value="{{ $estudiante->nota }}" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <x-primary-button>Registrar</x-primary-button>
        </div>
    </form>
</x-app-layout>


