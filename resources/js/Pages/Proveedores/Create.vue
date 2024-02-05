<template>
    <AuthenticatedLayout>
        <template title="Create Proveedor">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Proveedor</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <ProveedorForm :form="form" @submit="form.post(route('proveedores.store'))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
  
</template>

<script>
export default {
    name: 'ProveedoresCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ProveedorForm from '@/Components/Proveedores/Form.vue'

const form = useForm({
    nombre: '',
    direccion: '',
    email: '',
    cif: '',
    estado: false,
    cualificacion: 0
})
</script>

<style>

</style>