<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Geração de Transação') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-semibold mb-4">Transação</h3>
                    <hr class="my-6 border-gray-300 dark:border-gray-600"><br>
                    <form action="{{ route('dashboard') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="usuario" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Usuário</label>
                            <input type="text" id="usuario" name="usuario" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600" required>
                        </div>

                        <div>
                            <label for="valor" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Valor</label>
                            <input type="number" id="valor" name="valor" step="0.01" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600" required>
                        </div>

                        <div>
                            <label for="meio_pagamento" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Meio de Pagamento</label>
                            <select id="meio_pagamento" name="meio_pagamento" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600" required>
                                <option value="cartao_credito">Cartão de Crédito</option>
                                <option value="transferencia">Transferência Bancária</option>
                                <option value="paypal">PayPal</option>
                                <option value="stripe">Stripe</option>
                            </select>
                        </div>

                        <div>
                            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Criar Transação</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

