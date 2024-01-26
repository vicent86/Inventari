<template>
    <AuthenticatedLayout>
        <template title="Create Pago">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Pago</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <PagoForm :form="form" :ventas="ventas" @submit="form.post(route('pagos.store'))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
  
</template>

<script>
export default {
    name: 'PagosCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '../../Layouts/AuthenticatedLayout.vue'
import PagoForm from '../../Components/Pago/Form.vue'

defineProps({
    ventas: {
        type: Object,
        required: true,
    }
})

const form = useForm({
    importe: Number,
    fecha_pago: Date,
    metodo_pago: ''
})
</script>

