<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    amount: {
        type: Number
    },
    transactions: {
        type: Array
    }
})
</script>

<template>
    <Head title="Tableau de bord" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tableau de bord</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-full bg-white shadow-sm sm:rounded-lg flex items-center mb-10">
                    <div class="p-6 pr-2 text-gray-900">Le montant dans votre compte est</div>
                    <div class="text-2xl font-bold text-black-900">{{ amount }} Fdj</div>
                </div>

                <h1 class="text-2xl font-bold mb-5">Historique des transactions</h1>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Envoyé à
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date de la transaction
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Montant
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-white border-b" v-for="transaction in transactions">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ transaction.receiver }}
                            </th>
                            <td class="px-6 py-4">
                                {{ transaction.created_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ transaction.amount }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
