<template>
  <AuthenticatedLayout title="Edit Stock">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Stock</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <StockForm :updating="true" :form="form" @submit="form.put(route('stocks.update', stock.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
    name: 'StockEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import StockForm from '@/Components/Stocks/Form.vue'

const props = defineProps ({
    stock : {
        type : Object,
        required : true
    }
});

const form = useForm({
    cantidad: props.stock.cantidad,
    ultima_actualizacion : props.stock.ultima_actualizacion,
    localizacion: props.stock.localizacion
})
</script>

