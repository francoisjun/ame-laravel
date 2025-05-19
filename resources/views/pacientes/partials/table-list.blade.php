<x-search-bar :$search/>

<div class="overflow-x-auto mb-4">
    <table class="w-full text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">Nome</th>
                <th scope="col" class="px-4 py-3">CPF</th>
                <th scope="col" class="px-4 py-3">Telefone</th>
                <th scope="col" class="px-4 py-3">Email</th>
                <th scope="col" class="px-4 py-3">Prontuários</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr class="border-b dark:border-gray-700">
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"><a href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->nome }}</a></th>
                <td class="px-4 py-3">{{ $paciente->getCpfFormated() }}</td>
                <td class="px-4 py-3">{{ $paciente->getTelefoneFormated() }}</td>
                <td class="px-4 py-3">{{ $paciente->email }}</td>
                <td class="px-4 py-3 flex items-center justify-end">
                    <a href="{{ route('pacientes.prontuarios.create', $paciente->id ) }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Novo</a>
                    <a href="{{ route('pacientes.prontuarios', $paciente->id ) }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Listar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>