<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST"
            action="{{ isset($pessoa) ? route('pessoa.update', ['pessoa' => $pessoa['id']]) : route('pessoa.store') }}">
            @csrf
            @isset($pessoa)
                @method('PUT')
            @endisset

            <div class="mt-6 space-y-6">
                <div class="flex items-end gap-x-3">
                    <input id="ativo" name="ativo" type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" value="0">
                    <label for="ativo" class="block text-sm font-medium leading-6 text-white">Inativo</label>
                </div>

                <div class="flex items-center gap-x-3">
                    <input id="fisica" name="tipo" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" value="fisica" checked>
                    <label for="fisica" class="block text-sm font-medium leading-6 text-white">Pessoa Física</label>
                    <input id="juridica" name="tipo" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" value="juridica">
                    <label for="juridica" class="block text-sm font-medium leading-6 text-white">Pessoa Jurídica</label>
                    
                </div>
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="nome_completo" value="Nome Completo" />
                <x-text-input id="nome_completo" class="block mt-1 w-full" type="text" name="nome_completo"
                    :value="old('nome_completo', isset($pessoa['nome_completo']) ? $pessoa['nome_completo'] : '')" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('nome_completo')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="cargo_id" value="Cargo" />
                <select name="cargo_id" id="cargo_id" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                    <option value="" >Selecione...</option>
                    @foreach ($cargo as $c)                        
                        <option value="{{$c->id}}" >{{$c->cargo}} ({{$c->nivel}})</option>
                    @endforeach                    
                </select>
            </div>

            <!-- Celular -->
            <div class="mt-4">
                <x-input-label for="celular" value="Celular" />
                <x-text-input id="celular" class="block mt-1 w-full" type="text" name="celular"
                    :value="old('celular', isset($pessoa['celular']) ? $pessoa['celular'] : '')" />
                <x-input-error :messages="$errors->get('celular')" class="mt-2"/>
            </div>

            <!-- Endereço -->
            <div class="mt-4">
                <x-input-label for="endereco" value="Endereço" />
                <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco"
                    :value="old('endereco', isset($pessoa['endereco']) ? $pessoa['endereco'] : '')" />
                <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
            </div>

            <!-- Data de nascimento -->
            <div class="mt-4">
                <x-input-label for="nascimento" value="Data de nascimento" />
                <x-text-input id="nascimento" class="block mt-1 w-full" type="date" name="nascimento"
                    :value="old('nascimento', isset($pessoa['nascimento']) ? $pessoa['nascimento'] : '')" />
                <x-input-error :messages="$errors->get('nascimento')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{route('pessoa.index')}}">                    
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
