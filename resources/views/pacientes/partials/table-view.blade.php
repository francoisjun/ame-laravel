@php
    $cellStyle = "px-4 py-3 text-gray-900 uppercase whitespace-nowrap bg-gray-50 dark:bg-gray-700 dark:text-white border-b dark:border-gray-800";
    $rowStyle = "border-b dark:border-gray-700";
    $columnWidth = 250;
@endphp
<div class="overflow-x-auto mb-4">
    <h2 class="mb-8 text-2xl font-bold">{{ $paciente->nome }}</h2>

    <h4 class="mb-1 uppercase text-lg">Dados Pessoais</h4>
    <table class="w-full text-left text-gray-500 dark:text-gray-400 table-auto">
        <tbody>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}" width={{ $columnWidth }}>CPF</th>
                <td class="px-4 py-3">{{ $paciente->getCpfFormated() }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Data de Nascimento</th>
                <td class="px-4 py-3">{{ $paciente->getNascimentoFormated() }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Gênero</th>
                <td class="px-4 py-3">{{ $paciente->getGeneroFormated() }}</td>
            </tr>            
        </tbody>
    </table>

    <h4 class="mb-1 mt-4 uppercase text-lg">Filiação</h4>
    <table class="w-full text-left text-gray-500 dark:text-gray-400 table-auto">
        <tbody>            
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}" width={{ $columnWidth }}>Filiação Pai</th>
                <td class="px-4 py-3">{{ $paciente->filiacao_pai }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Filiação Mãe</th>
                <td class="px-4 py-3">{{ $paciente->filiacao_mae }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Responsável</th>
                <td class="px-4 py-3">{{ $paciente->responsavel }}</td>
            </tr>            
        </tbody>
    </table>

    <h4 class="mb-1 mt-4 uppercase text-lg">Endereço</h4>
    <table class="w-full text-left text-gray-500 dark:text-gray-400 table-auto">
        <tbody>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}" width={{ $columnWidth }}>Endereço</th>
                <td class="px-4 py-3">{{ $paciente->endereco }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Complemento</th>
                <td class="px-4 py-3">{{ $paciente->complemento }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Bairro</th>
                <td class="px-4 py-3">{{ $paciente->bairro }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Cidade</th>
                <td class="px-4 py-3">{{ $paciente->cidade }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">CEP</th>
                <td class="px-4 py-3">{{ $paciente->getCepFormated() }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">UF</th>
                <td class="px-4 py-3">{{ $paciente->uf }}</td>
            </tr>
        </tbody>
    </table>

    <h4 class="mb-1 mt-4 uppercase text-lg">Contato</h4>
    <table class="w-full text-left text-gray-500 dark:text-gray-400 table-auto">
        <tbody>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}" width={{ $columnWidth }}>Telefone</th>
                <td class="px-4 py-3">{{ $paciente->getTelefoneFormated() }}</td>
            </tr>
            <tr class="{{ $rowStyle }}">
                <th scope="col" class="{{ $cellStyle }}">Email</th>
                <td class="px-4 py-3">{{ $paciente->email }}</td>
            </tr>
        </tbody>
    </table>
</div>