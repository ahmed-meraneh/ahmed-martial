<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm} from '@inertiajs/vue3';
import {ref} from "vue";

defineProps({
    users: {
        type: Array,
    },
});

const amountInput = ref(null);

const form = useForm({
    receiverId: '',
    amount: '',
});

const storeTransaction = () => {
    form.post(route('transaction.create'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.amount) {
                form.reset('amount');
                amountInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <Head title="Virement et Transaction"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Virement et Transaction</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-full bg-white shadow-sm sm:rounded-lg">
                    <form @submit.prevent="storeTransaction" class="p-6">
                        <div class="mb-5">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Envoyer à</label>
                            <select
                                id="countries"
                                v-model="form.receiverId"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            >
                                <option v-for="user in users" :value="user.id">
                                    {{ user.name }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                                Montant
                            </label>
                            <input
                                type="number"
                                id="amount"
                                ref="amountInput"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required
                                v-model="form.amount"
                            >
                        </div>
                        <button
                            type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                        >
                            Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
