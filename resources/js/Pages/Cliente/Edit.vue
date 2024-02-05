<template>
  <AuthenticatedLayout title="Edit Cliente">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Cliente</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ClienteForm :updating="true" :form="form" @submit="form.put(route('clientes.update', cliente.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
    name: 'ClienteEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import ClienteForm from '@/Components/Cliente/Form.vue'

const props = defineProps ({
    cliente : {
        type : Object,
        required : true
    }
});

const form = useForm({
    nombre: props.cliente.nombre,
    direccion : props.cliente.direccion,
    telefono : props.cliente.telefono,
    cif : props.cliente.cif
})
</script>

