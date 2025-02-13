<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';

defineProps({
});
</script>

<template>
    <AdminLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Welcome
            </h2>
        </template>
        <div class="p-5">
            <div class="min-h-96 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                Dashboard content here...
            </div>
        </div>
    </AdminLayout>
</template>
