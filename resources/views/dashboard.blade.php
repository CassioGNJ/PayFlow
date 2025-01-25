<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-semibold mb-4">Transações Recentes</h3>

                    <!-- Tabela de Transações -->
                    <div class="overflow-x-auto flex justify-center">
                        <table class="min-w-full bg-white dark:bg-gray-800 shadow-md rounded-lg">
                            <thead>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="py-3 px-4 text-left text-sm font-medium text-gray-900 dark:text-gray-100">ID</th>
                                    <th class="py-3 px-4 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Usuário</th>
                                    <th class="py-3 px-4 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Valor</th>
                                    <th class="py-3 px-4 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Status</th>
                                    <th class="py-3 px-4 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aqui você pode iterar pelas transações -->
                                <tr class="border-b dark:border-gray-700">
                                    <td class="py-3 px-4 text-sm text-gray-900 dark:text-gray-100">#12345</td>
                                    <td class="py-3 px-4 text-sm text-gray-900 dark:text-gray-100">João Silva</td>
                                    <td class="py-3 px-4 text-sm text-gray-900 dark:text-gray-100">R$ 150,00</td>
                                    <td class="py-3 px-4 text-sm text-gray-900 dark:text-gray-100">Concluída</td>
                                    <td class="py-3 px-4 text-sm text-gray-900 dark:text-gray-100">25/01/2025</td>
                                </tr>
                                <!-- Adicione mais transações aqui -->
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-6 border-gray-300 dark:border-gray-600">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
