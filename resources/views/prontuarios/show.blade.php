<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Prontuário ') }} > {{ $prontuario->id }}
        </h2>
    </x-slot>

    <x-slot name="message">
        <x-alert />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('prontuarios.partials.table-view')
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <x-secondary-button 
                            x-data=""
                            x-on:click="window.location.href='{{ route('prontuarios.edit', $prontuario->id ) }}'">
                            {{ __('Editar') }}
                        </x-secondary-button>

                        <x-secondary-button 
                            x-data=""
                            x-on:click="window.location.href='{{ route('prontuarios.pdf', $prontuario->id ) }}'">
                            {{ __('Gerar PDF') }}
                        </x-secondary-button>

                        <x-secondary-button 
                            x-data=""
                            x-on:click="window.location.href='{{ route('pacientes.prontuarios', $prontuario->paciente_id ) }}'">
                            {{ __('Voltar') }}
                        </x-secondary-button>                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
