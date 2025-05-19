<form action="{{ route('pacientes.store') }}" method="POST">
    @csrf
    <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
        <div class="sm:col-span-3">
            <x-input-label for="nome" :value="__('Nome')" />
            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
        </div>

        <div class="w-full">
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" maxlength=11 placeholder="12345678901" :value="old('cpf')" required autocomplete="cpf" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <div class="w-full">
            <x-input-label for="nascimento" :value="__('Data de Nascimento')" />
            <x-text-input id="nascimento" class="block mt-1 w-full" type="date" name="nascimento" min="1925-01-01" max="2025-01-01" :value="old('nascimento', '1980-01-01')" required autocomplete="nascimento" />
            <x-input-error :messages="$errors->get('nascimento')" class="mt-2" />
        </div>

        <div class="w-full">
            <x-input-label for="genero" :value="__('Gênero')" />
            <select id="genero" name="genero" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">
                <option value="f" {{ old('genero') == 'f' ? 'selected' : '' }}>Feminino</option>
                <option value="m" {{ old('genero') == 'm' ? 'selected' : '' }}>Masculino</option>
                <option value="o" {{ old('genero') == 'o' ? 'selected' : '' }}>Outro</option>
            </select>
            <x-input-error :messages="$errors->get('genero')" class="mt-2" />
        </div>

        <div class="sm:col-span-3">
            <x-input-label for="filiacao_pai" :value="__('Nome do Pai')" />
            <x-text-input id="filiacao_pai" class="block mt-1 w-full" type="text" name="filiacao_pai" :value="old('filiacao_pai')" autocomplete="filiacao_pai" />
            <x-input-error :messages="$errors->get('filiacao_pai')" class="mt-2" />
        </div>

        <div class="sm:col-span-3">
            <x-input-label for="filiacao_mae" :value="__('Nome da Mãe')" />
            <x-text-input id="filiacao_mae" class="block mt-1 w-full" type="text" name="filiacao_mae" :value="old('filiacao_mae')" autocomplete="filiacao_mae" />
            <x-input-error :messages="$errors->get('filiacao_mae')" class="mt-2" />
        </div>

        <div class="sm:col-span-3">
            <x-input-label for="responsavel" :value="__('Responsável')" />
            <x-text-input id="responsavel" class="block mt-1 w-full" type="text" name="responsavel" :value="old('responsavel')" autocomplete="responsavel" />
            <x-input-error :messages="$errors->get('responsavel')" class="mt-2" />
        </div>

        <div class="sm:col-span-2">
            <x-input-label for="endereco" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autocomplete="endereco" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="complemento" :value="__('Complemento')" />
            <x-text-input id="complemento" class="block mt-1 w-full" type="text" name="complemento" :value="old('complemento')" autocomplete="complemento" />
            <x-input-error :messages="$errors->get('complemento')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autocomplete="bairro" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade', 'Guarabira')" required autocomplete="city address-level2" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="cep" :value="__('CEP')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" maxlength=8 placeholder="12345678" :value="old('cep', '58200000')" required autocomplete="postal-code" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="uf" :value="__('UF')" />
            <select id="uf" name="uf" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" required>
                <option value="AC" {{ old('uf','PB') == 'AC' ? 'selected' : '' }}>Acre</option>
                <option value="AL" {{ old('uf','PB') == 'AL' ? 'selected' : '' }}>Alagoas</option>
                <option value="AP" {{ old('uf','PB') == 'AP' ? 'selected' : '' }}>Amapá</option>
                <option value="AM" {{ old('uf','PB') == 'AM' ? 'selected' : '' }}>Amazonas</option>
                <option value="BA" {{ old('uf','PB') == 'BA' ? 'selected' : '' }}>Bahia</option>
                <option value="CE" {{ old('uf','PB') == 'CE' ? 'selected' : '' }}>Ceará</option>
                <option value="DF" {{ old('uf','PB') == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
                <option value="ES" {{ old('uf','PB') == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
                <option value="GO" {{ old('uf','PB') == 'GO' ? 'selected' : '' }}>Goiás</option>
                <option value="MA" {{ old('uf','PB') == 'MA' ? 'selected' : '' }}>Maranhão</option>
                <option value="MT" {{ old('uf','PB') == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
                <option value="MS" {{ old('uf','PB') == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                <option value="MG" {{ old('uf','PB') == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
                <option value="PA" {{ old('uf','PB') == 'PA' ? 'selected' : '' }}>Pará</option>
                <option value="PB" {{ old('uf','PB') == 'PB' ? 'selected' : '' }}>Paraíba</option>
                <option value="PR" {{ old('uf','PB') == 'PR' ? 'selected' : '' }}>Paraná</option>
                <option value="PE" {{ old('uf','PB') == 'PE' ? 'selected' : '' }}>Pernambuco</option>
                <option value="PI" {{ old('uf','PB') == 'PI' ? 'selected' : '' }}>Piauí</option>
                <option value="RJ" {{ old('uf','PB') == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                <option value="RN" {{ old('uf','PB') == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                <option value="RS" {{ old('uf','PB') == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                <option value="RO" {{ old('uf','PB') == 'RO' ? 'selected' : '' }}>Rondônia</option>
                <option value="RR" {{ old('uf','PB') == 'RR' ? 'selected' : '' }}>Roraima</option>
                <option value="SC" {{ old('uf','PB') == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
                <option value="SP" {{ old('uf','PB') == 'SP' ? 'selected' : '' }}>São Paulo</option>
                <option value="SE" {{ old('uf','PB') == 'SE' ? 'selected' : '' }}>Sergipe</option>
                <option value="TO" {{ old('uf','PB') == 'TO' ? 'selected' : '' }}>Tocantins</option>
            </select>
                
            <x-input-error :messages="$errors->get('uf')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="tel" name="telefone" maxlength=11 placeholder="83912345678" :value="old('telefone')" autocomplete="tel" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    </div>
    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-3">
            {{ __('Salvar') }}
        </x-primary-button>

        <x-secondary-button class="ms-3" x-data="" x-on:click="window.location.href='{{ route('pacientes.index') }}'">
            {{ __('Cancelar') }}
        </x-secondary-button>
    </div>
</form>