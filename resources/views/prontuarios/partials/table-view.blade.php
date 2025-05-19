@php
    $cellStyle = "px-4 py-3 text-gray-900 uppercase whitespace-nowrap bg-gray-50 dark:bg-gray-700 dark:text-white border-b dark:border-gray-800";
    $rowStyle = "border-b dark:border-gray-700";
    $columnWidth = 250;
@endphp
<div class="overflow-x-auto mb-4">
    <h2 class="mb-8 text-2xl font-bold">Prontuário #{{ $prontuario->id }}</h2>

    <h4 class="mb-1 uppercase text-lg">Paciente</h4>
    <table class="w-full text-left text-gray-500 dark:text-gray-400 table-auto">
        <tbody>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}" width={{ $columnWidth }}>Nome</th>
                <td class="px-4 py-3">{{ $prontuario->paciente->nome }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}" width={{ $columnWidth }}>CPF</th>
                <td class="px-4 py-3">{{ $prontuario->paciente->getCpfFormated() }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Data de Nascimento</th>
                <td class="px-4 py-3">{{ $prontuario->paciente->getNascimentoFormated() }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Idade</th>
                <td class="px-4 py-3">{{ $prontuario->paciente->idade }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Gênero</th>
                <td class="px-4 py-3">{{ $prontuario->paciente->getGeneroFormated() }}</td>
            </tr>            
        </tbody>
    </table>

    <h4 class="mb-1 mt-4 uppercase text-lg">Detalhes</h4>
    <table class="w-full text-left text-gray-500 dark:text-gray-400 table-auto">
        <tbody>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}" width={{ $columnWidth }}>Diagnóstico / CID-10</th>
                <td class="px-4 py-3">{{ $prontuario->diagnostico }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Queixa Principal / HDA / Antecedentes</th>
                <td class="px-4 py-3">{{ $prontuario->queixa}}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Observações</th>
                <td class="px-4 py-3">{{ $prontuario->obs}}</td>
            </tr>
        </tbody>
    </table>
</div>