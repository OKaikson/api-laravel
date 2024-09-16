<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ isset($cargo) ? route('pessoa.update', ['pessoa' => $cargo['id']]) : route('cargo.store') }}">
            @csrf
            @isset($cargo)
                @method('PUT')
            @endisset

            <!-- Cargo -->
            <div class="mt-4">
                <x-input-label for="cargo" value="Cargo" />
                <x-text-input id="cargo" class="block mt-1 w-full" type="text" name="cargo"
                    :value="old('cargo', isset($pessoa['cargo']) ? $pessoa['cargo'] : '')" autofocus autocomplete="name" required/>
                <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
            </div>

            <!-- Auxiliar -->
            <div class="mt-4">
                <x-input-label for="nivel" value="Função" />
                <select name="nivel" id="nivel" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                    <option value="" >Selecione...</option>
                    <option value="auxiliar" >Auxiliar</option>
                    <option value="gerente">Gerente</option>
                    <option value="terceirizado">Terceirizado</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{route('cargo.index')}}">                    
                    <x-secondary-button class="ml-4">
                        Voltar
                    </x-secondary-button>
                </a>
                <x-primary-button class="ml-4">
                    Gravar
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
