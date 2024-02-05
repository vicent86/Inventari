<template>
  <AuthenticatedLayout title="Edit Venta_Detalle">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Venta_Detalle</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <VentaDetalleForm :updating="true" :form="form" @submit="form.put(route('venta_detalles.update', venta_detalle.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
    name: 'VentaDetallesEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import VentaDetalleForm from '@/Components/Venta_Detalles/Form.vue'

const props = defineProps ({
    venta_detalle : {
        type : Object,
        required : true
    }
});

const form = useForm({
    precio_producto: props.category.nombre,
    cantidad : props.category.descripcion
})
</script>

