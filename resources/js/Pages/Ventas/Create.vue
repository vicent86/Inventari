<template>
    <AuthenticatedLayout>
        <template title="Create Venta">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Categoria</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <VentaForm :form="form" :clientes="clientes" @submit="form.post(route('ventas.store'))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
  
</template>

<script>
export default {
    name: 'VentasCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '../../Layouts/AuthenticatedLayout.vue';
import VentaForm from '../../Components/Ventas/Form.vue';

defineProps({
    clientes: {
        type: Object,
        required: true
    }
})

const form = useForm({
    precio_total : 0.00,
    fecha_venta : Date,
    
})
</script>

