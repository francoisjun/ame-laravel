<div class="flex flex-auto space-x-4 mb-4 items-center">
    <div class="w-full">
        <form action="#" method="GET">
            <x-input-label for="search" class="sr-only" :value="__('Pesquisar')" />
            <div class="relative w-full flex items-center">
                {{-- <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div> --}}
                <x-text-input id="search" class="block mt-1 w-full" type="text" name="search" :value="$search" placeholder="Pesquisar" />
            </div>
        </form>
    </div>
    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <x-secondary-button 
            x-data=""
            x-on:click="window.location.href='{{ route('pacientes.create') }}'">
            {{ __('Novo Paciente') }}
        </x-secondary-button>
    </div>
</div>
