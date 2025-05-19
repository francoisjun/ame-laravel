<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Prontuarios') }} > {{$paciente->nome}}
        </h2>
    </x-slot>

    <x-slot name="message">
        <x-alert />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('pacientes.partials.table-list-prontuarios')
                    <div class="flex items-center justify-end mt-4">
    
                        <x-secondary-button class="ms-3" x-data="" x-on:click="window.location.href='{{ route('pacientes.index') }}'">
                            {{ __('Voltar') }}
                        </x-secondary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
