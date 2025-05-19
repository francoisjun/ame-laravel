@csrf
<div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
    <div class="sm:col-span-3">
        <x-input-label for="diagnostico" :value="__('Diagnósticos / CID-10')" />
        <x-text-input id="diagnostico" class="block mt-1 w-full" type="text" name="diagnostico" :value="old('diagnostico')" required autofocus/>
        <x-input-error :messages="$errors->get('diagnostico')" class="mt-2" />
    </div>

    <div class="sm:col-span-3">
        <x-input-label for="queixa" :value="__('Queixa Principal / HDA / Antecedentes')" />
        <x-text-area-input id="queixa" class="block mt-1 w-full" name="queixa" :value="old('queixa')" required />
        <x-input-error :messages="$errors->get('queixa')" class="mt-2" />
    </div>

    <div class="sm:col-span-3">
        <x-input-label for="obs" :value="__('Observações')" />
        <x-text-area-input id="obs" class="block mt-1 w-full" name="obs" :value="old('obs')" />
        <x-input-error :messages="$errors->get('obs')" class="mt-2" />
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