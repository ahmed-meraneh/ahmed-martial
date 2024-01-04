<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Tableau de bord" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tableau de bord</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-full bg-white shadow-sm sm:rounded-lg flex items-center">
                    <div class="p-6 pr-2 text-gray-900">Le montant dans votre compte est</div>
                    <div class="text-2xl font-bold text-black-900">100000 Fdj</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
