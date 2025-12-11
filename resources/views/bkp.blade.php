      <x-table class="mt-6">
                        <x-slot name="head">
                            <x-table.heading>Transportadora</x-table.heading>
                            <x-table.heading>Produto</x-table.heading>
                            <x-table.heading>Peso de Entrada</x-table.heading>
                            <x-table.heading>Peso de Saída </x-table.heading>
                            <x-table.heading>Motorista</x-table.heading>
                            <x-table.heading>Placa do Veículo</x-table.heading>
                            <x-table.heading>Empresa de Origem</x-table.heading>
                            <x-table.heading>Empresa de Destino</x-table.heading>
                            <x-table.heading>Data de Entrada</x-table.heading>
                            <x-table.heading>Data de Saída</x-table.heading>
                        </x-slot>
                        <x-slot name="body">
                            @foreach ($cargas as $carga)
                                <x-table.row>
                                    <x-table.cell>{{$carga->transportadora}}</x-table.cell>
                                    <x-table.cell>{{$carga->produto}}</x-table.cell>
                                    <x-table.cell>{{$carga->peso_entrada}}</x-table.cell>
                                    <x-table.cell>{{$carga->peso_saida}}</x-table.cell>
                                    <x-table.cell>{{$carga->motorista}}</x-table.cell>
                                    <x-table.cell>{{$carga->placa_veiculo}}</x-table.cell>
                                    <x-table.cell>{{$carga->empresa_origem}}</x-table.cell>
                                    <x-table.cell>{{$carga->empresa_destino}}</x-table.cell>
                                    <x-table.cell>{{$carga->data_entrada}}</x-table.cell>
                                    <x-table.cell>{{$carga->data_saida}}</x-table.cell>
                                </x-table.row>
                                @endforeach
                        </x-slot>
                    </x-table>