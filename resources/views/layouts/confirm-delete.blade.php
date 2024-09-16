<x-guest-layout>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-5 min-w-full inline-block align-middle dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <div class="overflow-hidden">
                    <div class="flex p-6 text-white">
                        Confirma a exclusão do registro?
                    </div>

                    <div class="border-t pt-4 flex justify-content align-center">
                        <a class="px-2" href="{{Route('pessoa.index')}}">
                            <x-secondary-button class="mb-3">
                                Cancelar
                            </x-secondary-button>
                        </a>
                        <form class="" action="{{Route('pessoa.destroy', ['pessoa' => $data['id']])}}" method="POST">
                            @csrf                           
                            @method('delete')     
                            <x-danger-button type="submit">
                                Excluir
                            </x-danger-button>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
