<x-guest-layout>

    <div class="flex flex-col">
        <div class="container">
            <a href="{{ route('cargo.create') }}">
                <x-primary-button class="mb-3">
                    Novo
                </x-primary-button>
            </a>
            <a href="{{route('welcome')}}">                    
                <x-secondary-button class="ml-4">
                    Inicio
                </x-secondary-button>
            </a>
        </div>
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Cargo</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Nível</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Cadastrado em</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cargo as $c)
                              <tr class="">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white dark:text-neutral-200">{{$c['cargo']}}  </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white dark:text-neutral-200">{{$c['nivel']}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white dark:text-neutral-200">{{$c['created_at']}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex justify-content align-center">
                                    <a href="{{Route('cargo.edit', ['cargo' => $c['id']])}}" type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Editar</a>                                        
                                    <a href="{{Route('cargo.confirm', ['cargo' => $c['id']])}}" type="buttonx'" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-red dark:hover:text-blue-400 dark:focus:text-blue-400">Excluir</a>                                    
                                </td>
                              </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
