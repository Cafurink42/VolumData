<x-app-layout>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Entrada de Cargas') }}
        </h2>
    </x-slot>

    <form action="{{route('cargas.entrada.store')}}" method="POST">
       
        @csrf
           <div class="min-h-screen flex flex-col justify-center items-center mt-[-10%]">
            <x-input-label for="t50ransportadora" :value="__('Transportadora')" />
            <x-text-input id="transportadora" class="block mt-1 w-[30%]"
                            type="text"
                            name="transportadora"
                            required autocomplete="transportadora" />
          <x-input-label for="produto" :value="__('Produto')" />
          <x-text-input id="produto" class="block mt-1 w-[30%]"
                            type="text"
                            name="produto"
                            required autocomplete="produto" />

        <x-input-label for="peso_entrada" :value="__('Peso de Entrada')" />
        <x-text-input id="produto" class="block mt-1 w-[30%]"
                            type="number"
                            name="peso_entrada"
                            required autocomplete="peso_entrada" />

        <x-input-label for="data_entrada" :value="__('Data de Entrada')" />
        <x-text-input id="data_entrada" class="block mt-1 w-[30%]"
                            type="date"
                            name="data_entrada"
                            required autocomplete="data_entrada" />

        <x-input-label for="motorista" :value="__('Motorista')" />
        <x-text-input id="motorista" class="block mt-1 w-[30%]"
                            type="text"
                            name="motorista"
                            required autocomplete="motorista" />

        <x-input-label for="placa_veiculo" :value="__('Placa Veículo')" />
        <x-text-input id="placa_veiculo" class="block mt-1 w-[30%]"
                            type="text"
                            name="placa_veiculo"
                            required autocomplete="placa_veiculo" />

        <x-input-label for="empresa_origem" :value="__('Empresa Origem')" />
        <x-text-input id="empresa_origem" class="block mt-1 w-[30%]"
                            type="text"
                            name="empresa_origem"
                            required autocomplete="empresa_origem" />

       <x-input-label for="empresa_destino" :value="__('Empresa Destino')" />
       <x-text-input id="empresa_destino" class="block mt-1 w-[30%]"
                            type="text"
                            name="empresa_destino"
                            required autocomplete="empresa_destino" />

        </div>
        <div class = "flex justify-center items-center mt-[-10%]">
            <x-primary-button type="submit" class="mt-6 ml-4 bg-green-500 hover:bg-green-700 text-white;  font-bold py-2 px-4 r">
                {{ __('Registrar Entrada')}}
            </x-primary-button>
        </div>  
    </form>


  
</x-app-layout>