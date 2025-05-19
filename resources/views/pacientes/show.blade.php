<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Paciente ') }} > {{ $paciente->nome }}
        </h2>
    </x-slot>

    <x-slot name="message">
        <x-alert />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('pacientes.partials.table-view')
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <x-secondary-button 
                            x-data=""
                            x-on:click="window.location.href='{{ route('pacientes.index') }}'">
                            {{ __('Voltar') }}
                        </x-secondary-button>
                        <x-secondary-button 
                            x-data=""
                            x-on:click="window.location.href='{{ route('pacientes.edit', $paciente->id) }}'">
                            {{ __('Editar') }}
                        </x-secondary-button>
                        <x-danger-button
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        >{{ __('Deletar') }}</x-danger-button>

                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                            <form method="post" action="{{ route('pacientes.destroy', $paciente->id) }}" class="p-6">
                                @csrf
                                @method('delete')

                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    Tem certeza que deseja deletar o paciente {{ $paciente->nome }}?
                                </h2>

                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    Uma vez que esse paciente for deletado, todas as informações e prontuários associados a ele serão permanentemente apagados.
                                </p>

                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        Cancelar
                                    </x-secondary-button>

                                    <x-danger-button class="ms-3">
                                        Deletar
                                    </x-danger-button>
                                </div>
                            </form>
                        </x-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
