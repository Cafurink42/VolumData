<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cargas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('dashboard')}}" method="GET">
                        @csrf
                        <div class="flex items-end gap-6">
                             <div>
                                 <x-input-label for="data_entrada" :value="__('Data Entrada')" />
                                 <x-text-input type="date" class="w-40" />
                             </div>
                             <div>
                                <x-input-label for="produto" :value="__('Filtrar por Produto')" />

                                <select id = "tipo_produto" name = "tipo_produto" class= "rounded-lg border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900">
                                    <option value="leite">Leite</option>
                                    <option value="soro">Soro</option>
                                    <option value="creme">Creme</option>
                                </select>   


                             </div>

                             <div class="table-auto md:table-fixed ...">
                                <x-input-label for="tipo_carga" :value="__('Tipo de Carga')"/>
                                <select id="tipo_carga" name="tipo_carga" class="rounded-lg border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 ">
                                    <option value="entrada"> Entrada </option> 
                                    <option value="saida">Saída</option>
                                </select>
                             </div>

                             <div class = "flex flex-col gap-6">
                                <table>
                                    <thead>
                                        <tr>
                                            <p>Cargas de Entrada</p>
                                            <th class="px-4 py-2">Produto</th>
                                            <th class="px-4 py-2">Placa</th>
                                            <th class="px-4 py-2">Peso da Carga</th>
                                            <th class="px-4 py-2">Data </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cargasEntrada as $carga)
                                        <tr>
                                            <td class="border px-4 py-2">{{$carga->produto}}</td>
                                            <td class="border px-4 py-2">{{$carga->placa_veiculo}}</td>
                                            <td class="border px-4 py-2">{{$carga->peso_entrada}}</td>
                                            <td class="border px-4 py-2">{{$carga->data_entrada}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                     <table>
                                    <thead>
                                        <tr>
                                            <p class=''>Cargas de Saída</p>
                                            <th class="px-4 py-2">Produto</th>
                                            <th class="px-4 py-2">Placa</th>
                                            <th class="px-4 py-2">Peso da Carga</th>
                                            <th class="px-4 py-2">Data </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cargasSaida as $carga)
                                        <tr>
                                            <td class="border px-4 py-2">{{$carga->produto}}</td>
                                            <td class="border px-4 py-2">{{$carga->placa_veiculo}}</td>
                                            <td class="border px-4 py-2">{{$carga->peso_saida}}</td>
                                            <td class="border px-4 py-2">{{$carga->data_saida}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>





                                @if ($cargasEntrada->isEmpty() and $cargasSaida->isEmpty())
                                    <div class="mt-4">Nenhuma carga encontrada.</div>
                                @endif

                         
                            </div>



                            

  
                        </div>
                        

                             
                        </div>
                        <x-primary-button class="mt-4">
                            {{ __('Filtrar')}}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
