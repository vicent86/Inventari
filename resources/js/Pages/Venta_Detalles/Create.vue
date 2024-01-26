<template>
    <AuthenticatedLayout>
        <template title="Create Venta_Detalle">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Venta_Detalle</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <VentaDetalleForm :form="form" :productos="productos" :ventas="ventas"  @submit="form.post(route('venta_detalles.store'))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
  
</template>

<script>
export default {
    name: 'VentaDetallesCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '../../Layouts/AuthenticatedLayout.vue';
import VentaDetalleForm from '../../Components/Venta_Detalles/Form.vue'

defineProps({
    productos: {
        type: Object,
        required: true,
    },
    ventas: {
        type: Object,
        required: true,
    }
})

const form = useForm({
    precio_producto: 0.00,
    cantidad: 0,
})
</script>

