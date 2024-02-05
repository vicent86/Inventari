<template>
  <AuthenticatedLayout title="Edit Pago">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Pago</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <PagoForm :updating="true" :form="form" @submit="form.put(route('pagos.update', pago.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
    name: 'PagoEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import PagoForm from '@/Components/Pago/Form.vue'

const props = defineProps ({
    pago : {
        type : Object,
        required : true
    }
});

const form = useForm({
    importe: props.pago.importe,
    fecha_pago : props.pago.fecha_pago,
    metodo_pago: props.pago.metodo_pago
})
</script>

