<template>
  <AuthenticatedLayout title="Edit Venta">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Venta</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <VentaForm :updating="true" :form="form" @submit="form.put(route('ventas.update', venta.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
    name: 'VentaEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import VentaForm from '@/Components/Ventas/Form.vue'

const props = defineProps ({
    venta : {
        type : Object,
        required : true
    }
});

const form = useForm({
    precio_total: props.category.precio_total,
    fecha_venta : props.category.fecha_venta
})
</script>

