<template>
    <AuthenticatedLayout>
        <template title="Create Cliente">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Cliente</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <ClienteForm :form="form" @submit="form.post(route('clientes.store'))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
  
</template>

<script>
export default {
    name: 'ClienteCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '../../Layouts/AuthenticatedLayout.vue';
import ClienteForm from '../../Components/Cliente/Form.vue'

const form = useForm({
    nombre: '',
    direccion: '',
    telefono: '',
    cif: '',
    estado: false
})
</script>

<style>

</style>