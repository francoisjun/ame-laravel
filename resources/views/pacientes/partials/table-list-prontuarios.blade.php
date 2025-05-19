<div class="overflow-x-auto mb-4">
    <table class="w-full text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">Data</th>
                <th scope="col" class="px-4 py-3">Diagnóstico</th>
                <th scope="col" class="px-4 py-3">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paciente->prontuarios as $prontuario)
            <tr class="border-b dark:border-gray-700">
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"><a href="{{ route('prontuarios.show', $prontuario->id) }}">{{ $prontuario->getData() }}</a></th>
                <td class="px-4 py-3">{{ $prontuario->diagnostico }}</td>
                <td class="px-4 py-3 flex items-center justify-end">
                    <a href="{{ route('prontuarios.edit', $prontuario->id ) }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Editar</a>
                    <a href="{{ route('prontuarios.pdf', $prontuario->id ) }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gerar PDF</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>