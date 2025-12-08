<x-app-layout>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Saída de Cargas') }}
        </h2>
    </x-slot>

    <form action = "{{route('cargas.saida.store')}}" method = "POST" >
       
        @csrf
           <div class="mt-4">
            <x-input-label for="transportadora" :value="__('Transportadora')" />
            <x-text-input id="transportadora" class="block mt-1 w-full"
                            type="text"
                            name="transportadora"
                            required autocomplete="transportadora" />
          <x-input-label for="produto" :value="__('Produto')" />
          <x-text-input id="produto" class="block mt-1 w-full"
                            type="text"
                            name="produto"
                            required autocomplete="produto" />

        <x-input-label for="peso_saida" :value="__('Peso de Saída')" />
        <x-text-input id="produto" class="block mt-1 w-full"
                            type="number"
                            name="peso_saida"
                            required autocomplete="peso_saida" />

        <x-input-label for="data_entrada" :value="__('Data de Entrada')" />
        <x-text-input id="data_entrada" class="block mt-1 w-full"
                            type="date"
                            name="data_entrada"
                            required autocomplete="data_entrada" />

        <x-input-label for="motorista" :value="__('Motorista')" />
        <x-text-input id="motorista" class="block mt-1 w-full"
                            type="text"
                            name="motorista"
                            required autocomplete="motorista" />

        <x-input-label for="placa_veiculo" :value="__('Placa Veículo')" />
        <x-text-input id="placa_veiculo" class="block mt-1 w-full"
                            type="text"
                            name="placa_veiculo"
                            required autocomplete="placa_veiculo" />

        <x-input-label for="empresa_origem" :value="__('Empresa Origem')" />
        <x-text-input id="empresa_origem" class="block mt-1 w-full"
                            type="text"
                            name="empresa_origem"
                            required autocomplete="empresa_origem" />

       <x-input-label for="empresa_destino" :value="__('Empresa Destino')" />
       <x-text-input id="empresa_destino" class="block mt-1 w-full"
                            type="text"
                            name="empresa_destino"
                            required autocomplete="empresa_destino" />

        </div>
                
        <x-primary-button class="mt-6 ml-4 bg-red-500 hover:bg-red-700 text-white; font-bold py-2 px-4 rounded" >
            {{ __('Registrar Saída')}}
        </x-primary-button>
    </form>


  
</x-app-layout>